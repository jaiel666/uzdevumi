<?php

$elements = ['rock', 'scissors', 'paper'];

$userSelection = readline('Enter your element ' . implode(', ', $elements) . ': ');

if (!in_array(strtolower($userSelection), $elements)) {
    echo 'Invalid element selection';
    exit;
}

$computerSelection = $elements[array_rand($elements)];
echo "Computer selected: $computerSelection\n";

if ($userSelection === $computerSelection) {
    echo 'Its a tie';
    exit;
}

if (($userSelection === 'paper' && $computerSelection === 'rock') ||
    ($userSelection === 'scissors' && $computerSelection === 'paper') ||
    ($userSelection === 'rock' && $computerSelection === 'scissors')) {
    echo 'User wins!';
    exit;
}

echo 'Computer wins!';


$elements = ['rock', 'scissors', 'paper'];

$userSelection = readline('Enter your element ' . implode(', ', $elements) . ': ');

if (!in_array(strtolower($userSelection), $elements)) {
    echo 'Invalid element selection';
    exit;
}

$computerSelection = $elements[array_rand($elements)];
echo "Computer selected: $computerSelection\n";

if ($userSelection === $computerSelection) {
    echo 'Its a tie';
    exit;
}

if (($userSelection === 'paper' && $computerSelection === 'rock') ||
    ($userSelection === 'scissors' && $computerSelection === 'paper') ||
    ($userSelection === 'rock' && $computerSelection === 'scissors')) {
    echo 'User wins!';
    exit;
}

echo 'Computer wins!';

