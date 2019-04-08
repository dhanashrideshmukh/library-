<?php
$dsn = "mysql:host=localhost;dbname=library_v8";
$user = "root";
$pass = "";
$opt = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
$pdo = new PDO($dsn, $user, $pass, $opt);

class Library_Manager extends PDO {
    private $conn;
    
    public function __construct(PDO $pdo) {
        $this->conn = $pdo;
    }
    public function DeleteData($pdo,$title) {
        
        $stmt = $pdo->prepare("select ID from book where title = ?");
        try {
            $stmt->execute([$title]);
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $idKey = $stmt->fetch();
            $ID = $idKey['ID'];
        } catch (PDOException $e) {
            echo $e->getMessage();
            $error = $e->errorInfo();
            die("ID return error");
        }
        //First delete the link from Author_book intermediary table if exists
        $stmt = $pdo->prepare("DELETE FROM author_book_intermediary WHERE book_id = ?");
        try {
            $stmt->execute([$ID]);
            
           // echo "\n"."Rows Deleted from author_book_intermediary ";
            
        } catch (PDOException $e) {
            echo $e->getMessage();
            $error = $e->errorInfo();
            die();
        }
        
        // Delete from stock
         $stmt = $pdo->prepare("DELETE FROM stock WHERE book_id = ?");
        try {
            $stmt->execute([$ID]);
          //  echo "\n"."Rows Deleted from stock ";
            
        } catch (PDOException $e) {
            echo $e->getMessage();
            $error = $e->errorInfo();
            die();
        }
        $stmt = $pdo->prepare("DELETE FROM book WHERE ID = ?");
        try {
            $stmt->execute([$ID]);
          //  echo "\n"."Rows Deleted from Book ";
        } catch (PDOException $e) {
            echo $e->getMessage();
            $error = $e->errorInfo($opt);
//            print_r($error);
            die();
        }
    }
}
$librarymanager = new Library_Manager($pdo);
$librarymanager->DeleteData($pdo,"Super cats");