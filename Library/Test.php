<?php

require 'C:\xampp\htdocs\Exercise20\Library\Users\Guest.php';

$ar = array("A", "B", "C");

use Library\Users\Guest;

$Guest = new Guest("Gladdis", "Gorman");


$Guest->first_name="Gladdis";
$Guest->last_name="Gorman";

full_name($first_name, $last_name);

//use Library\Users\Member;

//$Member = new Member;
//
//$Member->first_name="D";
//$Member->last_name="Go";
//
//$Member->full_name();