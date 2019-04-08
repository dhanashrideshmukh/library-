<?php

$dsn = "mysql:host=localhost;dbname=library_v8";
$user = "root";
$pass = "";
$opt = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
$pdo = new PDO($dsn, $user, $pass, $opt);

class Member extends PDO {

    private $conn;
    protected $first_name;
    protected $second_name;
    protected $memberId;

    public function __construct(PDO $pdo, $first_name, $second_name) {
        try {
            $this->conn = $pdo;
            $this->first_name = $first_name;
            $this->second_name = $second_name;
        } catch (PDOException $e) {
            echo $e->getMessage();
            die("Connection Error");
        }
    }

    public function view($conn, $first_name, $second_name) {
        try {
            $stmt = $conn->prepare("select ID from member where forename = '$first_name' && surname = '$second_name'");
            $stmt->execute($_GET);
            $memberKey = $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $memberKey = $stmt->fetch();
            $memberId = $memberKey['ID'];
        } catch (PDOException $e) {
            echo $e->getMessage();
            die("Member ID Error");
        }

        try {
            $stmt = $conn->prepare("SELECT title, book_loan.Date_Loaned, book_loan.Date_Returned, book_loan.Due_Date "
                    . "FROM book INNER JOIN book_loan ON book.ID = book_loan.book_id WHERE member_id = $memberId;");
            $stmt->execute($_GET);
            $book = $stmt->setFetchMode(PDO::FETCH_ASSOC);
            while ($book = $stmt->fetch()) {
                echo '<div class="row justify-content-center align-items-center">';
                echo '<pre>';
                print_r($book);
                echo '</pre>';
                echo '</div>';
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
            $error = $e->errorInfo();
            die("Member Booklist Error");
        }
    }

    public function update($conn, $title, $date) {

        try {
            $stmt = $conn->prepare("select ID from book where title = '$title'");
            $stmt->execute($_GET);
            $idKey = $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $idKey = $stmt->fetch();
            $ID = $idKey['ID'];
        } catch (PDOException $e) {
            echo $e->getMessage();
            $error = $e->errorInfo();
            die("Member title error");
        }

        try {
            $returnDueDate = $conn->prepare("SELECT due_date from book_loan WHERE book_id = $ID");
            $returnDueDate->execute($_GET);
            $previousDate = $returnDueDate->setFetchMode(PDO::FETCH_ASSOC);
            $previousDate = $returnDueDate->fetch();
            if ($previousDate['due_date'] == null) {
                throw new PDOException("This book has not been checked out");
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
//            $error = $e->errorInfo();
            die("Member Due Date Error");
        }


        try {
            $update = $conn->prepare("UPDATE book_loan SET due_date = '$date' WHERE book_id = $ID");
            echo '<div class="row justify-content-center align-items-center">';
            echo "Your due date has been extended to $date.";
            echo '</div>';
            $update->execute();
        } catch (PDOException $e) {
            echo $e->getMessage();
//            $error = $e->errorInfo();
            die("Member Update Error");
        }
    }

}

//$member = new Member($pdo, $first_name, $second_name);
//$member->view($pdo, $first_name, $second_name);

//$member = new Member($pdo, "Jenna", "Smith");

//$member->view($pdo);

//$member->update($pdo, "ABC", '2019-05-24'); //this format only for date 