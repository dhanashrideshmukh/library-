<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <link href="Library.css" rel="stylesheet" type="text/css"/>
         <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <title>LibraryManager</title>
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
        
        
        <div class="container" id="Delete_Data">
        <form action="" method="POST"> 
            <div class="row justify-content-center align-items-center">
            Delete Book From Table: <br><br>
            </div>
            
            <div class="row justify-content-center align-items-center">
            Book name: <input class="author_input" type = "text" name = "book_name" /> 
            </div>
            <br>                     
            <div class="row justify-content-center align-items-center">
            <button type="submit" name="submit">Submit</button>    
            </div>
        </form>
        </div>
        <?php
        if (isset($_POST['submit'])) {
            include("../../Library_ManagerConnect.php");
            $bookname = $_POST['book_name'];
             $librarymanager = new Library_Manager($pdo);
             $librarymanager->DeleteData($pdo,$bookname);
             echo "$bookname has been deleted from your database.";
        }
        ?>
    </body>
</html>
