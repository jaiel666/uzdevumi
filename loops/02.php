<?php

echo "Input number of terms: ";

//todo complete loop to multiply i with itself n times, it is NOT allowed to use built-in pow() function
$n = readline();
echo "Input multiplier: ";
$multiplier = readline();

echo "Result of multiplying $n with itself $multiplier times is: ";

for ($i = 1; $i <= $n; $i++) {
    $multiplier *= $n;
}

echo $multiplier;
