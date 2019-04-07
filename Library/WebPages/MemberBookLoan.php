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
        <title>Member</title>
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
        <div class="parent-container">
            <div class="row">
                <div class="col-md-6">
                    <div class="container" id="view_loaned_books">
                        <div class="row justify-content-center align-items-center">
                            Type in your name to view your loaned books.
                        </div>
                        <form action="" method="POST">              
                            <div class="row justify-content-center align-items-center">
                                First name: <input type = "text" name = "first_name" /> 
                            </div>            

                            <div class="row justify-content-center align-items-center">
                                Last name: <input type = "text" name = "surname" />  
                            </div>

                            <div class="row justify-content-center align-items-center">
                                <button type="submit" name="submit">Submit</button>   
                            </div>
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

                    </div>
                </div>

                <div class="col-md-6">
                    <div class="container" id="update_loaned_books">
                        <div class="row justify-content-center align-items-center">
                            Type in the name of the book you would like to extend: 
                        </div>

                        <form action="" method="POST">
                            <div class="row justify-content-center align-items-center">
                                Book title: <input type = "text" name = "book_title" />   
                            </div>

                            <div class="row justify-content-center align-items-center">
                                Date: <input type = "text" name = "due_date" />  
                            </div>

                            <div class="row justify-content-center align-items-center">
                                <button type="submit" name="update">Update</button>  
                            </div>
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
                    </div>
                </div>
            </div>
        </div>

    </body>
</html>
