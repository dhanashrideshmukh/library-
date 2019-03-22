<?php


include 'Library/Users/Library_Manager.php';

use Library\Users\Guest;
use Library\Users\Member;
use Library\Users\Librarian;
use Library\Users\Library_Manager;

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

$Library_Manager = new Library_Manager("999999", "(Manager)", "1234", "B00k5", "Lydia", "McDonald");
//      Setting a property/object 

$Library_Manager->BookList = [
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
//      Echoing the data from functions

echo $Library_Manager->Full_Name() . "\n";

echo $Library_Manager->Forgot_user_id() . "\n";

echo $Library_Manager->Position() . "\n";

$item = "ABC";
$Library_Manager->DeleteData($array, $item);










