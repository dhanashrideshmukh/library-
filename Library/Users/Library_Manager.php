<?php

namespace Library\Users;
include 'Librarian.php';

include 'C:\xampp\htdocs\Exercise20\Library\Interfaces\Bookable.php';

use Library\Interfaces\Bookable;

class Library_Manager extends Librarian {

// First parameter is passed by reference as we want to make changes to the original array that is sent.
// if this is not done then the changes don't apply to original array.    
public function DeleteData ($list,$item) {
    unset($list[$item]);
    print_r($list);
}

public function view($list) {
        print_r($list);
    }
  
}






