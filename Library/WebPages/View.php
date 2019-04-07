<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link href="Library.css" rel="stylesheet" type="text/css"/>
         <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <title>Our Collection</title>
    </head>
    <body>
        <nav>
            <ul>
                <li><a href="HomePage.php">Home</a></li>
                <li><a href="Error.php">About Us</a></li>
                <li><a href="View.php">Our Collection</a></li>
                <li><a href="LoginPage.php">Login</a></li>
                <li><a href="">Register</a></li>
            </ul>
        </nav>       
        
        <div class="container" id="view">
            <div class="row justify-content-center align-items-center">
                Our Collection:
            </div>
        <?php
include("..\..\GuestConnect.php");
$guest = new Guest($pdo);
        ?>
        </div>
    </body>
</html>
