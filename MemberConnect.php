<?php

$dsn = "mysql:host=localhost;dbname=libraryv6";
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

    public function update($conn, $title, $date) {
        $stmt = $conn->prepare("select ID from book where title = '$title'");

        try {
            $stmt->execute($_GET);
            $idKey = $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $idKey = $stmt->fetch();
            $ID = $idKey['ID'];
        } catch (PDOException $e) {
            echo $e->getMessage();
            $error = $e->errorInfo();
            die("ID return error");
        }
        $returnDueDate = $conn->prepare("SELECT due_date from book_loan WHERE book_id = $ID");
                try {
            $returnDueDate->execute($_GET);
            $previousDate = $returnDueDate->setFetchMode(PDO::FETCH_ASSOC);
            $previousDate = $returnDueDate->fetch();
            if ($previousDate['due_date'] == null) {
                throw new PDOException("This book has not been checked out");
            }
            
        } catch (PDOException $e) {
            echo $e->getMessage();
//            $error = $e->errorInfo();
            die("Due Date Error");
        }
        
        $update = $conn->prepare("UPDATE book_loan SET due_date = '$date' WHERE book_id = $ID");

        try {
            $update->execute();
        } catch (PDOException $e) {
            echo $e->getMessage();
//            $error = $e->errorInfo();
            die("Update Error");
        }
    }

}

$member = new Member($pdo);
//$guest->view($pdo);
        
$member->update($pdo, "ABC", '2019-05-24'); //this format only for date 