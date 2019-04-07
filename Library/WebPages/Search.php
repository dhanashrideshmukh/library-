<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <link href="Library.css" rel="stylesheet" type="text/css"/>
         <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <title>Search</title>
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

<div class="container" id="search">
            <form action="" method="POST">

 <div class="row justify-content-center align-items-center">
                Book Name:
 </div>
                 <div class="row justify-content-center align-items-center">
                <input type="text" name="bookname" value="" />
                 </div>
                 <div class="row justify-content-center align-items-center">
                <button type="submit" name="submit">Submit</button>
                 </div>

            </form> 
        <?php
        if (isset($_POST['submit'])) {
            $bookname = $_POST['bookname'];
        }
        ?>
        <?php
        if (isset($_POST['submit'])) {
            include("..\..\SearchClass.php");
            echo "Results for $bookname:<br><br>";
            $book = new Search($pdo);
            $book->search($pdo, $bookname);

//        $member->view($pdo, $first_name, $second_name);
        }
        ?>
        </div>
    </body>
</html>
