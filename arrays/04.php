<?php

$array1 = [];

for ($i = 0; $i < 10; $i++) {
    $randomNumber = rand(1, 100);
    $array1[] = $randomNumber;
}

$array2 = $array1;
$array1[9] = -7;

echo "Array 1: " . implode(' ', $array1) . "\n";
echo "Array 2: " . implode(' ', $array2) . "\n";

