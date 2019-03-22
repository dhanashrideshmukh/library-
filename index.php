<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Guest {
    private $name;
    
}

$authorList = array("A"=>"AA", 
                    "B"=>"BB", 
                    "C"=>"CC");

//what woukld you like to do?

echo "What would you like to do, enter S for search and V for view?";

$choice = stream_get_line(STDIN, 100, "\n");

switch($choice) {
    case "S":
    searchOptions();
    break;
    case "V":
    viewList();
    break;
};

function searchOptions() {
echo "What would you like to search for - A for Author, B for Book, C for Category";

$nextStep = stream_get_line(STDIN, 100, "\n");

switch($nextStep) {
    case "A":
        echo "What author you looking for?";
        $author = stream_get_line(STDIN, 100, "\n");
        searchAuthor($authorList, $author);
    break;
    case "B":
    searchBook();
    break;
    case "C":
    searchCategory();
    break;
};
}

function searchAuthor($list, $authors){
                for ($i=0;$i<count($authorList);$i++){
                    if ($authorList[$i]==$author){
                        echo "books by this author"; // return books by this author
                    } else
                        {
                        return "Book not available \n";
                    }
                        
                }
}

function searchBook ($books, $title){
                for ($i=0;i<count($books);$i++){
                    if ($books[$i]==$title){
                        return $title;
                    } else
                        {
                        return "Book not available \n";
                    }
                        
                }
}

function viewList() {
    echo "What would you like to view? A for authors, B for Books, C for Categories";
    $choice = stream_get_line(STDIN, 100, "\n");

switch($choice)    {
    case "A":
    return;//list of authors;
    break;
    case "B":
    return; //list of books;
    break;
    case "C":
    return; //list of category;
    break;
}
};


