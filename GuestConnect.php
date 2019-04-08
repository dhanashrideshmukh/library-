<?php

$dsn = "mysql:host=localhost;dbname=library_v8";
$user = "root";
$pass = "";
$opt = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

$pdo = new PDO($dsn, $user, $pass, $opt);


class Guest {

    private $conn;

    
    public function __construct(PDO $pdo) {
      try {
        $this->conn = $pdo;
    } catch (PDOException $e) {
                echo $e->getMessage();
            die("Connection Error");
}
      

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