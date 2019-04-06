<?php

include '../../autoload.php';
include 'array.php';

use Library\Users\Guest;
use Library\Users\Member;
use Library\Users\Librarian;
use Library\Users\Library_Manager;


$Library_Manager = new Library_Manager("999999", "(Manager)", "1234", "B00k5", "Lydia", "McDonald");
//      Setting a property/object 

$Library_Manager->BookList = $array;
//      Echoing the data from functions

echo $Library_Manager->Full_Name() . "\n";

echo $Library_Manager->Forgot_user_id() . "\n";

echo $Library_Manager->Position() . "\n";

$item = "Honey Bell";
$Library_Manager->DeleteData($array, $item);

$Library_Manager->view($array);

echo $Library_Manager->asReturnable("anna.smidt@gmail.com")."\n\n";










