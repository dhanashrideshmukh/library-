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
        <form class="form-signin" method="POST">
            <h2 class="form-signin-heading">Forgot Password</h2>
            <div class="input-group">
                <span class="input-group-addon" id="basic-addon1">@</span>
                <input type="text" name="username" class="form-control" placeholder="Username" required>
            </div>
            <br />
            <button class="btn btn-lg btn-primary btn-block" type="submit">Forgot Password</button>
            <a class="btn btn-lg btn-primary btn-block" href="login.php">Login</a>
        </form>

        <?php
        include 'Library/Connect.php';

        use Library\Connect;

        // After submitting the form, check if post superglobal is set & not empty, 
        // then assign submitted username to variable. 
        // Check that username exists in database using the select query, 
        // the select query should return one record. 
        // We can check it using mysqli_num_rows PHP function.

        if (isset($_POST) & !empty($_POST)) {
            $username = mysqli_real_escape_string($connection, $_POST['username']);
            $sql = "SELECT * FROM `login` WHERE username = '$username'";
            $res = mysqli_query($connection, $sql);
            $count = mysqli_num_rows($res);
            if ($count == 1) {
                echo "Send email to user with password";
            } else {
                echo "User name does not exist in database";
            }
        }
        ?>
    </body>
</html>
