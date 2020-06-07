<?php
$num = [1, 2, 3, 4, 5, 6, 7];
$result = 0;

foreach ($num as $n) {
    $result += $n;
}

$result /= count($num);

echo "result = $result";
