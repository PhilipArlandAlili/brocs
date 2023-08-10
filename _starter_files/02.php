<!-- 
    Write a program that takes a string as input and outputs whether it is a palindrome.
-->

<?php
    Function output($string) {
        if(strrev($string) == $string) {
            return 1;
        }
        else{
            return 0;
        }
    }

    $char = "racecar";
    if (output($char)) {
        echo $char . " is a Palindrome";
    }
    else {
        echo $char . " is not a Palindrome";
    }
?>