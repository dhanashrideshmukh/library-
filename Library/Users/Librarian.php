<?php

namespace Library\Users;
include 'Member.php';
class Librarian extends Member {
    protected $emp_id;
    protected $position;

    //      Creating methods  
    public function __construct($emp_id, $position, $user_id, $password, $first_name, $last_name) {
        parent::__construct($user_id, $password, $first_name, $last_name);// constructing parent
        $this->emp_id = $emp_id;
        $this->position = $position;
}

    public function Position() {
        return "$this->first_name " . "$this->last_name" . " " . $this->position;
    }

    public function viewAll($list) {
        return $list;
    }

    public function updateTitle(&$array, $oldTitle, $newTitle) {
        foreach ($array as $author => $title) {
            if ($title === $oldTitle) {
                $array[$author] = $newTitle;
                break;
            }
        }
    }
    
    public function updateAuthor(&$array, $oldAuthor, $newAuthor) {
        foreach ($array as $author => $title) {
            if ($author === $oldAuthor) {
                unset($array[$author]);
                $array[$newAuthor] = $title;
                break;
            }
        }
    }


    
public function insertAll(&$array, $author, $title) {
        $array[$author] = $title;
    }

}
