<?php

interface Bookable {
    public function asBookable($id);
}

//class LogInDetails implements Bookable {
//    
//protected $user_id;
//protected $password;
//   
//    public function asBookable($id, $password){
//       $this->user_id = $id;
//       $this->password = $password;
//    }
//}

class Library_Manager implements Bookable{
    
public function asBookable($id){
       return $this->user_id = $id;
//       $this->password = $password;
    }
    
//public function viewMD(Bookable $details) {
//    return $details->asBookable($id, $password);
//}  
}

class Member implements Bookable {
  public function asBookable($id){
       return $this->user_id = $id;
//       $this->password = $password;
    }  
}

$LM = new Library_Manager();
echo $LM->asBookable("A");

$M = new Member();
echo $M->asBookable("B");