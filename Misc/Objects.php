<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//      Declaring a class 
        class Guest {

//      Creating properties within the class.            
            private $first_name;
            private $last_name;
            
            
//      Creating methods  
//      add method for Guest to search allowed tables.
            function full_name(){
                return "$this->first_name" . " " . $this->last_name . "\n";
            }
            function view($list) {
                return $list;
            }
            
            function search($list, $item){
                for ($i = 0; $i < count($list); $i++){
                    if ($list[$i] == $item){
                        echo($list[$i]);
                    } else
                        {
                        echo "Item not available \n";
                    }
                        
                }
            }
        }

//      Extending a class
        class Member extends Guest {
//      Creating properties within the class.
            private $user_id;
            private $password;

//      Creating methods        
//            function Forgot_user_id(){
//                return "Hello " . $this->Full_Name() . "Your User ID is: " . $this->user_id . "<br/>";
//            }
//            
//            function Forgot_password(){
//                return "Hello " . $this->Full_Name() . "Your Password is: " . $this->password . "<br/>";
//            }
//        
//         
//            function Full_Name(){
//                return "$this->first_name" . " " . $this->last_name . "<br/>";
//            }
        
        }

//      Extending and extended class
        class Librarian extends Member {
        
            private $emp_id;
            private $position;
        
//      Creating methods            
//            function Full_Name(){
//                return "$this->first_name" . " " . $this->last_name . "<br/>";
//            }
//            
//            function Position(){
//                return "$this->first_name " . "$this->last_name" . " " . $this->position . "<br/>";
//            }
        }
        class Library_Manager extends Librarian {
        
            private $emp_id;
            private $position;
        }
        
//      Instanciating a class         
        $LibraryManager = new Library_Manager;
//      Setting a property/object 
        $LibraryManager->first_name="Sarah";
        $LibraryManager->last_name="Smith";
        $LibraryManager->user_id= "1234"; 
        $LibraryManager->password="B00k5";
        $LibraryManager->emp_id="999999";
        $LibraryManager->position="(Manager)";
   
//      Instanciating a class         
        $Librarian = new Librarian;
//      Setting a property/object 
        $Librarian->first_name="Lucy";
        $Librarian->last_name="Lang";
        $Librarian->user_id= "5678"; 
        $Librarian->password="L3arn";
        $Librarian->emp_id="000000";
        $Librarian->position="(Librarian)";

   
//      Instanciating a class         
        $Member = new Member;
//      Setting a property/object 
        $Member->first_name="Maggie";
        $Member->last_name="Murphy";
        $Member->user_id= "3333"; 
        $Member->password="C00k5";

//      Instanciating a class         
        $Guest = new Guest;
//      Setting a property/object 
        $Guest->first_name="Gladdis";
        $Guest->last_name="Gorman";
        
//      Echoing the data from functions
        echo $LibraryManager->full_name(). "<br/>";
        echo $Librarian->full_name() . "<br/>";
        echo $Member->full_name() . "<br/>";
        echo $Guest->full_name() . "<br/>";
        
        echo $LibraryManager->Forgot_user_id(). "<br/>";
        echo $Librarian->Forgot_password() . "<br/>";
        
        echo $LibraryManager->Position(). "<br/>";
        echo $Librarian->Position() . "<br/>";
        
        
        