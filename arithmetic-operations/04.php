<?php
$n = 10;
$factorial = 1;

for ($i = 1; $i <= $n; $i++) {
    $factorial *= $i;
}

echo "The factorial of $n is $factorial\n";
