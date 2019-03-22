<?php

require 'C:\xampp\htdocs\Exercise20\Library\Users\Guest.php';
require 'C:\xampp\htdocs\Exercise20\Library\Users\Member.php';

$ar = array("A", "B", "C");

use Library\Users\Member;

$Member = new Member;

$Member->first_name="D";
$Member->last_name="Go";

$Member->full_name();