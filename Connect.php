<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="windows-1252">
        <link href="Library.css" rel="stylesheet" type="text/css"/>
        <title></title>
    </head>
    <body>
        <?php
        
        namespace Library\Connect;
        
        // sample code to link to MySql DB
        $connection = mysqli_connect('localhost', 'root', 'password');
        if (!$connection) {
            die("Database Connection Failed" . mysqli_error($connection));
        }
        $select_db = mysqli_select_db($connection, 'Library');
        if (!$select_db) {
            die("Database Selection Failed" . mysqli_error($connection));
        }
        ?>
    </body>
</html>
