<?php

$numbers = [
    1789, 2035, 1899, 1456, 2013,
    1458, 2458, 1254, 1472, 2365,
    1456, 2165, 1457, 2456
];

//todo
echo "Original numeric array: ";
echo implode(", ", $numbers) . "\n";

sort($numbers);

//todo
echo "Sorted numeric array: ";
echo implode(", ", $numbers) . "\n";

$words = [
    "Java",
    "Python",
    "PHP",
    "C#",
    "C Programming",
    "C++"
];

//todo
echo "Original string array: ";
echo implode(", ", $words) . "\n";

sort($words);

//todo
echo "Sorted string array: ";
echo implode(", ", $words) . "\n";
