<?php
$lowerBound = readline("Lower bound: ");
$upperBound = readline("Upper bound: ");

$sum = 0;
for ($i = $lowerBound; $i <= $upperBound; $i++) {
    $sum += $i;
}

$average = $sum / ($upperBound - $lowerBound + 1);


echo "The sum of $lowerBound to $upperBound is $sum\n";
echo "The average is $average\n";