<?php

$dsn = "mysql:host=localhost;dbname=libraryv6";
$user = "root";
$pass = "";
$opt = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
$pdo = new PDO($dsn, $user, $pass, $opt);

class Librarian {

    private $conn;

    public function __construct(PDO $pdo) {
        $this->conn = $pdo;
    }

    public function insert($pdo, $forename, $surname) {
    $insert = $pdo->prepare("INSERT INTO author (forename, surname) VALUES (:forename, :surname)");
        try {
            $insert->execute(["forename" => $forename, "surname" => $surname]);
        } catch (PDOException $e) {
            echo $e->getMessage();
//            $error = $e->errorInfo();
            die("Insert error");
        }
    }
    }

$librarian = new Librarian($pdo);
$librarian->insert($pdo, "Mac", "The Cat");