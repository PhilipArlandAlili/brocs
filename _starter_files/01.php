<!-- 
    Write a program that takes a character as input and outputs whether it is a vowel or a consonant.
-->

<?php
   Function output($string) {
      if ($string == "a" || $string == "e" || $string == "i" || $string == "o" || $string == "u")
      echo $string . "  is vowel";
      else
      echo $string . " is a consonant";
   }
   output("a");

?>