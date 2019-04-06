<?php

namespace Library\Users;
include_once '../../autoload.php';

class Library_Manager extends Librarian {
    
public function DeleteData ($list,$item) {
    unset($list[$item]);
    print_r($list);
}

public function view($list) {
        print_r($list);
    }

public function asReturnable($email){
    
//    foreach ($this->email as $user_id) {
//            if (strpos($user_id, $email) !== false) {
//                echo "Your log in is: $user_id";
//            } else {
                echo "$email";
//            }
//        }
}
}