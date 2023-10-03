<?php
echo "Enter first word: ";
$firstWord = readline();

echo "Enter second word: ";
$secondWord = readline();

$dotsLength = 30;
$dotsCount = $dotsLength - strlen($firstWord) - strlen($secondWord);
$dotsOutput = $firstWord . str_repeat(".", $dotsCount) . $secondWord;

echo $dotsOutput;