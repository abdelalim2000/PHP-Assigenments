<?php

function convertToSecond($h, $m)
{
    $hoursToSeconds = $h * 60 * 60;
    $minutesToSeconds = $m * 60;

    return $result = $hoursToSeconds + $minutesToSeconds;
}

echo "How many secnods : " . convertToSecond(1, 3) . "<br>";
echo "How many secnods : " . convertToSecond(2, 0) . "<br>";
echo "How many secnods : " . convertToSecond(0, 0) . "<br>";
