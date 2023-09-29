<?php
echo "Input the 1st number: ";
$number1 = readline();
echo "Input the 2nd number: ";
$number2 = readline();
echo "Input the 3rd number: ";
$number3 = readline();

//todo print the largest number
if ($number1 >= $number2 && $number1 >= $number3) {
    echo "The largest number is $number1" ;
} elseif ($number2 >= $number1 && $number2 >= $number3) {
    echo "The largest number is $number2 " ;
} else {
    echo "The largest number is $number3 " ;
}