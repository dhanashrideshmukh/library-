<?php

class Book
{
  // these are the properties of the class   
  public $Id;
  Public $Category_Id;
  public $Title;
  
  public $BookList = ['AA','Minibeasts','Code Breakers','I See You','Super cats'];
  // methods
      public function Search($bookname)
      {
          
          
        foreach($this->BookList as $bname)
        {
            if (strpos($bname, $bookname) !== false)
            {
                echo $bname;
            }
            
            
        }
        
      } 
  
}

$continue = 'y';
while($continue === 'y' ){
echo "please enter the book name - ";
 $userentry = stream_get_line(STDIN,100,"\n");
 $BookObject = new Book;
 $BookObject->Search($userentry); 
 
 echo "\nDo you want to continue? (y/n)";
 $continue = stream_get_line(STDIN,10,"\n");
 }

