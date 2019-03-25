<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
//<?php
//session_start();
//?>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="Library.css" rel="stylesheet" type="text/css"/>
        <title></title>
    </head>
    <body>
        <div style="text-align: center">
            <h2>Oops, something has gone wrong!</h2> 
            <h2>If at first you don't succeed, try, try...</h2>
        </div>
        
        <p>
            <?php
            echo $_SESSION['errorMessage'];
            ?>
        </p>
        
        <div style="text-align: center">
           <button type="button" onclick="window.location.href = 'HomePage.php';">...again?</button>
        </div>
    </body>
</html>
