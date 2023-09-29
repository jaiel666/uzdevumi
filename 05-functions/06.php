<?php
$array = [5, 10, 15, 3.5, "Hello"];


function doubleInteger($number) {
    if (is_int($number)) {
        return $number * 2;
    } else {
        return $number;
    }
}

$arrayLength = count($array);

for ($i = 0; $i < $arrayLength; $i++) {
    $element = $array[$i];
    $doubledValue = doubleInteger($element);
    echo "Element {$i}: {$doubledValue}\n";
}