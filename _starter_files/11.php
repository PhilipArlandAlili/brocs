<!-- 
    Write a program that takes an array of numbers as input and outputs the average of the numbers.
-->

<?php
    $numbers = [85, 92, 78, 61, 72, 95, 88, 70, 60];

    function sum_numbers($nums) {
        $sum = 0;
        $even_ns = [];

        foreach($nums as $num) {
            if ($num %2==0) {
                $sum += $num;
                array_push($even_ns,$num);
            }
        }

        echo "Even numbers: ";
        foreach($even_ns as $n) {
            echo "$n";
        }
        return $sum;
    }
    $total = sum_numbers($numbers);
    echo "<br>Sum of even numbers: ${total}";
?>