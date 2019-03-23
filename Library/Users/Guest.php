<?php

namespace Library\Users;

include 'User.php';
// Declaring a class 

use Library\Users\User;

class Guest extends User {

//      Creating properties within the class.            
    protected $first_name;
    protected $last_name;

//      Creating methods  
//      add method for Guest to search allowed tables

    public function __construct($first_name, $last_name) {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        echo "Welcome, $first_name $last_name\n";
    }

    public function Full_Name() {
        echo "$this->first_name" . " " . "$this->last_name" . "\n";
    }

    public function view($list) {
        if ($list === "Author" || $list === "Author_Book_Intemediary" || $list === "Book" || $list === "Category") {
            print_r($list);
            return true;
        } else {
            echo ("Access denied") . "\n\n";
            return false;
        }
    }

    public function Search($bookname) {
        foreach ($this->BookList as $bname) {
            if (strpos($bname, $bookname) !== false) {
                echo "Great news, we have the book you requested: " . $bname;
            }
        }
    }

}
