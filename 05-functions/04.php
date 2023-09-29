<?php
function isEighteenOrOlder($name, $surname, $age) {
    if ($age >= 18) {
        echo "{$name} {$surname} has reached the age of 18 or older.\n";
    } else {
        echo "{$name} {$surname} has not reached the age of 18 yet.\n";
    }
}

$people = [
    ["John", "Doe", 20],
    ["Alice", "Smith", 16],
    ["Bob", "Johnson", 22]
];

foreach ($people as $person) {
    isEighteenOrOlder($person[0], $person[1], $person[2]);
}
