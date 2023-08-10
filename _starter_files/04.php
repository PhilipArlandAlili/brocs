<!-- 
    Write a program that takes a number as input and outputs the sum of its digits.
 -->

 <?php
   Function sum ($digit) {
      $sums = "0";

      for ($i = 0; $i < strlen ($digit); $i++) {
         $sums += $digit[$i];
      }
      return $sums;
   }
   $digit = "99";
   echo "The sum of the input digits is: ";
   echo sum($digit);

?>