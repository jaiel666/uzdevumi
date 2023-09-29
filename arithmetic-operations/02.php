<?php
<<<<<<< HEAD
function checkOddEven(int $number)
{
=======
function checkOddEven($number) {
>>>>>>> 5766d1b72bfcb90bf1879d33a8d3c05c78b9a999
    if ($number % 2 == 0) {
        echo "Even Number\n";
    } else {
        echo "Odd Number\n";
    }
}

$number = readline("Enter number: ");

checkOddEven($number);
echo "bye!\n";