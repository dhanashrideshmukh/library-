<?php
namespace Library\DataAccess;



class MyDBConnection 
{

    public function CreateDBConnection() 
    {
        $servername = "localhost";
        $username = "root";
        $password = "";


        try 
        {
            $conn = new \PDO("mysql:host=$servername;dbname=library_v9", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            //echo "Connected successfully";
            return $conn;
        } catch (\PDOException $e) 
        {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    
}
$Bookname = $_POST["bookname"];
 try 
{
    $obj = new MyDBConnection();
    $conn = $obj->CreateDBConnection();

    $stmt = $conn->prepare("Select * from book where title = ?");
    $stmt ->execute([$Bookname]);
   $result = $stmt->setFetchMode(\PDO::FETCH_ASSOC); 
   $result = $stmt->fetchAll();
 
    print_r($result);

} catch (PDOException $e) 
{
    echo "DB Operation failed: " . $e->getMessage();
}


