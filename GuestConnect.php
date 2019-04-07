<?php

$dsn = "mysql:host=localhost;dbname=library_v8";
$user = "root";
$pass = "";
$opt = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

try {
$pdo = new PDO($dsn, $user, $pass, $opt);
} catch (PDOException $e) {
                echo $e->getMessage();
//            $error = $e->errorInfo();
//                include ("C:\xampp\htdocs\Exercise20\Library\WebPages\Error.php");
            die("Connection Error");
}

class Guest {

    private $conn;

    public function __construct(PDO $pdo) {
        $this->conn = $pdo;
    
//    }
//    public function view($conn) {
        $stmt = $pdo->prepare("call LIST()");

        try {

            $stmt->execute($_GET);
            $book = $stmt->setFetchMode(PDO::FETCH_ASSOC);
            while ($book = $stmt->fetch()) {
                echo '<div class="row justify-content-center align-items-center">';
                echo '<pre>'; print_r($book); echo '</pre>';
                echo '</div>';
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
            $error = $e->errorInfo();
            die();
        }
    }

}

$guest = new Guest($pdo);
//$guest->view($pdo);







//try {
//    $pdo = new PDO($dsn, $user, $pass);
//    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//    } catch (PDOException $e) {
//    die($e->getMessage());
//}