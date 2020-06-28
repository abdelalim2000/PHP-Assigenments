<?php

function reverseNumber($n)
{
    $number = $n;
    $reverse = 0;

    while (floor($number)) {
        $d = $number % 10;
        $reverse = $reverse * 10 + $d;
        $number = $number / 10;
    }

    return $reverse;
}

$num = 12345;

echo "the reverse of {$num} is " . reverseNumber($num);
