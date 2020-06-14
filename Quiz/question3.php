<?php

function median($numbers = array())
{
    if (!is_array($numbers)) {
        $numbers = func_get_args();
        abs($numbers);
    }
    rsort($numbers);
    $mid = (count($numbers) / 2);
    echo ($mid % 2 != 0) ? $numbers{
        $mid - 1} : (($numbers{
        $mid - 1}) + $numbers{
        $mid}) / 2;
}

median(2, 5, 6, 2, 6, 3, 4);
