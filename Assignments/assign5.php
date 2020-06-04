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

//factorial

function _fact($fact)
{
    $result = 1;
    for ($i = 1; $i <= $fact; $i++) {
        $result = $result * $i;
    }
    echo "fact {$fact} is {$result}";
}

_fact(5);

//power of number
echo "<br>";


function _pow($num, $power)
{
    $result = 1;
    for ($i = 1; $i <= $power; $i++) {
        $result = $result * $num;
    }
    echo "{$result}";
}

_pow(5, 2);
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
