<?php

function legnth($str, $i = 0)
{
    if ($i == strlen($str)) {
        return 0;
    } else {
        return 1 + legnth($str, $i + 1);
    }
}

echo "Legnth = " . legnth("apple");
