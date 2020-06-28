<?php

function triangelCheacker(float $a, float $b, float $c)
{
    /* check if equilateral */
    if ($a === $b && $a === $c) {
        return "equilateral";
    } else if ($a === $b || $a === $c || $c === $b) {
        return "isosceles";
    } else {
        return "none";
    }
}

echo triangelCheacker(2, 2, 2);
