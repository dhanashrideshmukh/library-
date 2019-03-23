<?php

include 'Library/Users/Guest.php';
//include Library\Users\Member . php;
//include Library\Users\Librarian . php;
//include Library\Users\Library_Manager . php;
include 'array.php';

use Library\Users\Guest;

$Guest = new Guest("Gladdis", "Gorman");
//      Setting a property/object 
$Guest->BookList = $array;
//      Echoing the data from functions
//echo $Guest->Full_Name(); **This is no longer called full_name as we made it a constructor - how do we call it?
echo $Guest->Full_Name()."\n";

$Guest->view($array);

//$i = "Smith";
//$Guest->search($array,$i);

$Guest->Search('I See You');

