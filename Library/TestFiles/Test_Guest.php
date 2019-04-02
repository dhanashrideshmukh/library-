<?php

include '../../autoload.php';
include 'array.php';


use Library\Users\Guest;

$Guest = new Guest("Gladdis", "Gorman");
//      Setting a property/object 
$Guest->BookList = $array;
//      Echoing the data from functions
echo $Guest->Full_Name()."\n";

$Guest->view($array)."\n";

$Guest->Search('I See You')."\n";

