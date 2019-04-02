<?php
//Abstract class includes methods to be inherited by each class and performed in its own way
namespace Library\Users;

abstract class User {
    abstract public function view ($list);
}
