<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        Type in your name to view your loaned books. <br>
        <form action="" method="POST">                      
            First name: <input type = "text" name = "first_name" />             
            <br>             
            Last name: <input type = "text" name = "surname" />             
            <br>                        
            <button type="submit" name="submit">Submit</button>              
        </form>

        <?php
        if (isset($_POST['submit'])) {
            $first_name = $_POST['first_name'];
            $second_name = $_POST['surname'];
            echo "Books loaned by: $first_name" . "$second_name";
        }
        ?>

        <?php
        if (isset($_POST['submit'])) {
            include("..\..\MemberConnect.php");
            $member = new Member($pdo, $first_name, $second_name);
            $member->view($pdo, $first_name, $second_name);
        }
        ?>
        Type in the name of the book you would like to extend: <br>
        <form action="" method="POST">
            Book title: <input type = "text" name = "book_title" />             
            <br>             
            Date: <input type = "text" name = "due_date" />             
            <br>                        
            <button type="submit" name="update">Update</button>  
        </form>
        <?php
                if (isset($_POST['update'])) {
            $book_title = $_POST['book_title'];
            $due_date = $_POST['due_date'];
//            echo "$book_title due date extended to $due_date";
        }
        ?>

        <?php
        if (isset($_POST['update'])) {
            include("..\..\MemberConnect.php");
            $member->update($pdo, $book_title, $due_date);
        }
        ?>
        
        
    </body>
</html>
