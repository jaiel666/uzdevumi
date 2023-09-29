<?php
function isEighteenOrOlder($name, $surname, $age) {
    if ($age >= 18) {
        echo "{$name} {$surname} has reached the age of 18 or older.\n";
    } else {
        echo "{$name} {$surname} has not reached the age of 18 yet.\n";
    }
}

$name = "John";
$surname = "Doe";
$age = 20;

isEighteenOrOlder($name, $surname, $age);