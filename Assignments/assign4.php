<?php
//task one
for ($i = 5; $i <= 15; $i++) {
    echo "<span>{$i}</span> <br>";
};

echo "<br>";

//task two

$num = 2056;

if ($num % 2 === 0) {
    echo "<span>it`s even number</span>";
} else {
    echo "<span>It`s odd number</span>";
};

echo "<br>";

//task three

$check = 6 - 7;

if ($check > 0) {
    echo "<span>{$check} is a postive number</span>";
} else if ($check === 0) {
    echo "<span>Zero</span>";
} else if ($check < 0) {
    echo "<span>{$check} is negative number</span>";
} else {
    echo "<span>Invalid Input</span>";
}


echo "<br>";

//task four

$rev = "Mohamed";
$stringLegnth = strlen($rev);

for ($i = $stringLegnth - 1; $i >= 0; $i--) {
    echo "<span>{$rev[$i]}</span>";
}
