<?php

include 'Library/Users/Guest.php';
//include Library\Users\Member . php;
//include Library\Users\Librarian . php;
//include Library\Users\Library_Manager . php;
use Library\Users\Guest;

$array = [
    "ABC" => "Honey Bell",
    "The Love I Lost" => "Rosie Bloom",
    "Code Breakers" => "Sarah Smith",
    'John Field' => 'Mini Beasts',
    'Sarah Smith' => 'Code Breakers',
    'Jane Wild' => 'I See You',
    'Agatha Christie' => 'Murder On The Orient Express',
    'Stephen Hawking' => 'Brief Answers To The Big Questions',
    'Jheni Osman' => 'The Worlds Great Wonders',
    'Stephen Farthing' => 'Art. The Whole Story',
    'Randall Munroe' => 'What If?'];

$Guest = new Guest("Gladdis", "Gorman");
//      Setting a property/object 
$Guest->BookList = [
    'ABC' => 'Honey Bell',
    'The Love I Lost' => 'Rosie Bloom',
    'Code Breakers' => 'Sarah Smith',
    'John Field' => 'Mini Beasts',
    'Sarah Smith' => 'Code Breakers',
    'Jane Wild' => 'I See You',
    'Agatha Christie' => 'Murder On The Orient Express',
    'Stephen Hawking' => 'Brief Answers To The Big Questions',
    'Jheni Osman' => 'The Worlds Great Wonders',
    'Stephen Farthing' => 'Art. The Whole Story',
    'Randall Munroe' => 'What If?'];
//      Echoing the data from functions
//echo $Guest->Full_Name(); **This is no longer called full_name as we made it a constructor - how do we call it?
echo $Guest->Full_Name()."\n";

$Guest->view($array);

//$i = "Smith";
//$Guest->search($array,$i);

$Guest->Search('I See You');



