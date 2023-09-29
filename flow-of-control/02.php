<?php

echo "Enter the number: ";
$number = readline();

//todo print if number is positive or negative
if ($number > 0) {
    echo "$number is positive";
} else if ($number <0) {
    echo "$number is negative";
} else {
    echo "$number is not positive and negative";
}