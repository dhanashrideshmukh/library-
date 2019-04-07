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
//        $member->view($pdo, $first_name, $second_name);
        }
        ?>
    </body>
</html>
