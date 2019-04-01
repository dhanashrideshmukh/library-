<?php

include '../../autoload.php';
include 'array.php';

use Library\Users\Guest;
use Library\Users\Member;

$Member = new Member("3333", "C00k5", "Mary", "Magoo");
//      Setting a property/object 

$Member->BookList = $array;


//      Echoing the data from functions

echo $Member->Full_Name()."\n"; //get_full_name

echo $Member->Forgot_user_id()."\n\n"; //get_user_id

echo $Member->Forgot_password()."\n\n";

echo $Member->asReturnable()."\n\n";

$due_date = "21-04-2019";
$days = 5;
echo $Member->Update_Due_Date($due_date, $days);










