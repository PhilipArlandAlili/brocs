<!-- 
    Write a program that takes a character as input and outputs whether it is a vowel or a consonant.
-->

<?php

function letter($lets)
{
    if ($lets == 'a' || $lets == 'e' || $lets == 'i' || $lets == 'o' || $lets == 'u')
    echo "$lets is a vowel";

    else
    echo "$lets is a consonant";
}
return letter('b');

?>