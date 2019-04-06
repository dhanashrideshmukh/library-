<?php

$dsn = "mysql:host=localhost;dbname=library_v8";
$user = "root";
$pass = "";
$opt = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
$pdo = new PDO($dsn, $user, $pass, $opt);

class Member extends PDO {

    private $conn;

    public function __construct(PDO $pdo) {
        $this->conn = $pdo;
    }

    public function view($conn) {
        $stmt = $conn->prepare("call MemberView()");
        $update =$conn->prepare("UPDATE book_loan SET due_date = ? WHERE book_id = ?");

        try {

            $stmt->execute($_GET);
            $book = $stmt->setFetchMode(PDO::FETCH_ASSOC);
            while ($book = $stmt->fetch()) {
                print_r($book);
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
            $error = $e->errorInfo();
            die();
        }
    }
    
    public function update($conn) {
        $update=$conn->prepare("SELECT 'ID' from 'book' WHERE title='ABC';");
//        $update->bind_param("s", $title);
//        
        
        
//       $update =$conn->prepare("UPDATE book_loan SET due_date = ? WHERE book_id = ?");

        try {

            $stmt->execute($_GET);
//            $book = $stmt->setFetchMode(PDO::FETCH_ASSOC);
            
            while ($id = $stmt->fetch()) {
                print_r($id);
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
            $error = $e->errorInfo();
            die();
        }
    }

}

$member= new Member($pdo);
//$guest->view($pdo);
$member->update($pdo);