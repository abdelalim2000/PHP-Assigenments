<?php

function fact($num)
{
    $result = 1;
    for ($i = 1; $i <= $num; $i++) {
        $result *= $i;
    }
    echo "Fact {$num} is {$result}";
}

fact(6);
