<?php
//Traits can be used in any class by using the namespace and then calling the method
namespace Library\Traits;

trait dateable {
public function Update_Due_Date ($date, $days) {
        if ($days > 7) {
            return "You can only extend due date by 7 days";
        } else {
            $date = strtotime("+" . $days . " days", strtotime($date));
            return "Thank-you for renewing your book loan, please note your new return date is now: " . date("Y-m-d", $date);
        }
    }
};