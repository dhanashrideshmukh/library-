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
        <title>Admin</title>
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
        
        
        <div class="container" id="add_author">
        <form action="" method="POST"> 
            <div class="row justify-content-center align-items-center">
            Add a new author: <br><br>
            </div>
            
            <div class="row justify-content-center align-items-center">
            First name: <input class="author_input" type = "text" name = "first_name" /> 
                        
            Last name: <input class="author_input" type = "text" name = "surname" />   
            </div>
            <br>                     
            <div class="row justify-content-center align-items-center">
            <button type="submit" name="submit">Submit</button>    
            </div>
        </form>
        </div>
        
        <?php
        if (isset($_POST['submit'])) {
            $first_name = $_POST['first_name'];
            $second_name = $_POST['surname'];
            echo "Author $first_name " . "$second_name added to the database.";
        }
        ?>
        
        <?php
        if (isset($_POST['submit'])) {
        include("..\..\LibrarianConnect.php");
        $librarian = new Librarian($pdo);
        $librarian->insert($pdo, $first_name, $second_name);
        
//        $member->view($pdo, $first_name, $second_name);
        }
        ?>
    </body>
</html>
