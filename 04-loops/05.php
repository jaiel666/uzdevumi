<?php

$person1 = new stdClass();
$person1->name = "John";
$person1->surname = "Doe";
$person1->age = 20;
$person1->birthday = 'March 02';

$person2 = new stdClass();
$person2->name = "Joen";
$person2->surname = "Doe";
$person2->age = 22;
$person2->birthday = 'March 12';

$person3 = new stdClass();
$person3->name = "July";
$person3->surname = "Doe";
$person3->age = 12;
$person3->birthday = 'December 23';

$people = [$person1, $person2, $person3];

foreach ($people as $person) {
    echo "Name: " . $person->name . "\n";
    echo "Surname: " . $person->surname . "\n";
    echo "Age: " . $person->age . "\n";
    echo "Birthday: " . $person->birthday . "\n\n";
}