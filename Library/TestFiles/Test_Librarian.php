<?php


include '../../autoload.php';
include 'array.php';


use Library\Users\Guest;
use Library\Users\Member;
use Library\Users\Librarian;


$Librarian = new Librarian("000000", "(Librarian)", "5678", "L3arn", "Laura", "Lang");
//      Setting a property/object 

$Librarian->BookList = $array;
//      Echoing the data from functions
echo $Librarian->Full_Name() . "\n";

$title = "ABC";
$Librarian->updateTitle($array, $title, "DEF");
print_r($array);

$author = "Agatha Christie";
$Librarian->updateAuthor($array, $author, "Arthur Conan Doyle");
print_r($array);

$Librarian->insertAll($array, "Randall", "No way?");
print_r($array);

echo $Librarian->Forgot_user_id() . "\n";

echo $Librarian->Position() . "\n";

//write(new Librarian("hi"));

//$due_date=13-03-2019;
//$days=5;
//echo $Librarian->Update_Due_Date($due_date, $days);

$Librarian->view($array);

//$i = "Smith";
//$Librarian->search($array,$i);

//$Librarian->Search("I See You");






