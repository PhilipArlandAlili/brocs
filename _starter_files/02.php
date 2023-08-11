<!-- 
    Write a program that takes a string as input and outputs whether it is a palindrome.
    
-->

<?php

function palindrome($string) {
    if ($string == strrev($string)) {
        echo "$string is a palindrome.";
    } else {
        echo "$string is not a palindrome.";
    }
}
return palindrome('racecara');

?>