<?php


include 'Library/Users/Librarian.php';

//include Library\Users\Library_Manager . php;
use Library\Users\Guest;
use Library\Users\Member;
use Library\Users\Librarian;

$array = [
    "Honey Bell" => "ABC",
    "Rosie Bloom" => "The Love I Lost",
    "Sarah Smith" => "Code Breakers",
    "John Field" => "Mini Beasts",
    "Jane Wild" => "I See You",
    "Agatha Christie" => "Murder On The Orient Express",
    "Stephen Hawking" => "Brief Answers To The Big Questions",
    "Jheni Osman" => "The Worlds Great Wonders",
    "Stephen Farthing" => "Art. The Whole Story",
    "Randall Munroe" => "What If?"];

$Librarian = new Librarian("000000", "(Librarian)", "5678", "L3arn", "Laura", "Lang");
//      Setting a property/object 

$Librarian->BookList = [
    "Honey Bell" => "ABC",
    "Rosie Bloom" => "The Love I Lost",
    "Sarah Smith" => "Code Breakers",
    "John Field" => "Mini Beasts",
    "Jane Wild" => "I See You",
    "Agatha Christie" => "Murder On The Orient Express",
    "Stephen Hawking" => "Brief Answers To The Big Questions",
    "Jheni Osman" => "The Worlds Great Wonders",
    "Stephen Farthing" => "Art. The Whole Story",
    "Randall Munroe" => "What If?"];
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

//$due_date=13-03-2019;
//$days=5;
//echo $Librarian->Update_Due_Date($due_date, $days);

//$Librarian->view($array);

//$i = "Smith";
//$Librarian->search($array,$i);

//$Librarian->Search("I See You");






