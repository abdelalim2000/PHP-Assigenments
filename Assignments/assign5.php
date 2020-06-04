<?php

function _pyramid($row)
{
    for ($i = 1; $i <= $row; $i++) {
        for ($k = 1; $k <= ($row - $i); $k++) {
            echo "&nbsp";
        };
        for ($j = 1; $j <= $i; $j++) {
            echo "*";
        };
        echo "<br>";
    };
};

_pyramid(10);


//check if prime number with function

function _primeNumber($num)
{
    if ($num <= 1) return false;
    if ($num % 2 === 0 && $num > 2) return false;
    $n = floor(sqrt($num));
    for ($i = 3; $i <= $n; $i++) {
        if ($num % $i === 0) {
            return false;
        }
    }
    echo "{$num} is prime number";
}


_primeNumber(15);
