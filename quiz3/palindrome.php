<?php

function Palindrome(int $n)
{
    $number = $n;
    $reversNumber = 0;

    while (floor($number)) {
        $d = $number % 10;
        $reversNumber = $reversNumber * 10 + $d;
        $number = $number / 10;
    }

    if ($reversNumber == $n) {
        return true;
    } else {
        return false;
    }
}

$num = 121;

if (Palindrome($num)) {
    echo "Palindrome <br>";
} else {
    echo "not a Palindrome <br>";
}
