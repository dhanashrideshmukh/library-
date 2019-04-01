<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$authorList = array("A"=>"AA", 
                    "B"=>"BB", 
                    "C"=>"CC");

$bookList = array("D"=>"DD", 
                    "E"=>"EE", 
                    "F"=>"FF");

$categoryList = ["GG","HH","II"];

//function delete($categoryLists, $item) {
//    print_r(array_splice($categoryLists, $item));
//}
//
//delete($categoryList, 0);



//            function search($list, $item){
//                for ($i = 0; $i < count($list); $i++){
//                    if ($list[$i] == $item){
//                        echo($list[$i]);
//                    } else
//                        {
//                        echo "Item not available \n";
//                    }
//                        
//                }
//            }

//search($categoryList, "A");

//$date = strtotime(date("Y-m-d", strtotime($date)) . " +1 week");
//echo date ("l\n"); echo date ("Y.m.d\n"); echo date ("H:i:s\n");
function addDayswithdate($date, $days){
    if($days > 7) {
        return "You can only extend due date by 7 days";
    } else {
        $date = strtotime("+".$days." days", strtotime($date));     
        return  date("Y-m-d", $date); 
        }
    }
//
  addDayswithdate(11-03-2019, 10);