```````<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link href="Library.css" rel="stylesheet" type="text/css"/>
        <title></title>
    </head>
    <body>
        <nav>

            <ul>
                <li><a href="HomePage.php">Home</a></li>
                <li><a href="Error.php">About Us</a></li>
                <li><a href="LoginPage.php">Login</a></li>
                <li><a href="">Register</a></li>
            </ul>

        </nav> 

        <div class="container" id="login">

            <form action="" method="POST">
                <div class="row justify-content-center align-items-center">
                    Username: <input  type="text"   name="username" class="form-control" required="" autofocus pattern=^[a-zA-Z][a-zA-Z0-9-_\.]{6,20}$ title="Your username must begin with a letter, and may not contain special characters" placeholder="6-20 Characters"/>
                </div>
                <div class="row justify-content-center align-items-center">
                    Password: <input  type="password"   name="password" placeholder="4-8 characters" class="form-control" pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{4,8}$" title="Password must be at least 4 characters, no more than 8 characters, and must include at least one upper case letter, one lower case letter, and one numeric digit."/>
                </div>
                <div class="row justify-content-center align-items-center">
                    <input  type="submit" value="Submit" />
                </div>
            </form>



            <?php
            include '../../autoload.php'; 
            use Library\Users\Member;
            if (!empty($_POST)) {
                if ($_POST["username"] == "Librarian") {
                    echo "<br><h4>Click <a href='LibrarianAdmin.php'>here</a> to view your admin page.</h4>";
                } else {
                $user = $_POST["username"];
                $user1 = new Member($user, "", $user, "");
                echo "<br><h4>Click <a href='MemberBookLoan.php'>here</a> to view your loan history.</h4>";
                }
            } else {
                echo "<h4>Forgot your username or password? <a href='#'>Click here</a></h4>";
            }
            ?>
    </body>
</html>
