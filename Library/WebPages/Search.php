<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
            
<title></title>
    </head>
    <body>
         <div> 
              
            <form action="" method="POST">
                
                
           Book Name:
            <input type="text" name="bookname" value="" />
            <button type="submit" name="submit">Submit</button>
            
            </form> 
        </div>
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
        
    </body>
</html>
