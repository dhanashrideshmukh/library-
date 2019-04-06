<?php

$dsn = "mysql:host=localhost;dbname=library_v8";
$user = "root";
$pass = "";
$opt = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
$pdo = new PDO($dsn, $user, $pass, $opt);

class Guest {

    private $conn;

    public function __construct(PDO $pdo) {
        $this->conn = $pdo;
    }

    public function view($conn) {
        $stmt = $conn->prepare("call LIST()");

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

}

$guest = new Guest($pdo);
$guest->view($pdo);







//try {
//    $pdo = new PDO($dsn, $user, $pass);
//    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//    } catch (PDOException $e) {
//    die($e->getMessage());
//}