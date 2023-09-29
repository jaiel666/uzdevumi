<?php

echo "Enter a positive integer: ";
$input = readline();

if (ctype_digit($input) && $input > 0) {
    $numDigits = strlen($input);
    echo "The number of digits in $input is: $numDigits";
} else {
    echo "Invalid input. Please enter a positive integer.";
}

