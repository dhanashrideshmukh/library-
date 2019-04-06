<?php
//interface is used a skeleton that can have different bones added to it in different classes.
//This interface returns a user_id in our case and is altered in Member and Library Manager files
//to use different search methods to return user_id.  
namespace Library\Interfaces; 

interface Returnable {
    public function asReturnable($email);
}

