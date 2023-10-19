<?php

$maxRows = 3;
$maxColumns = 5;

$a = "J";
$b = 'Q';
$c = 'K';
$d = 'A';
$e = '7';

$board = [];

$elements = [
    $a, $a, $a, $a, $a, $b, $b, $b, $b, $c, $c, $c, $d, $d, $e
];

echo "Enter your balance: ";
$balance = readline();

function generateBoard($maxRows, $maxColumns, $elements)
{
    for ($row = 0; $row < $maxRows; $row++) {
        for ($column = 0; $column < $maxColumns; $column++) {
            $board[$row][$column] = $elements[array_rand($elements)];
        }
    }

    return $board;
}

function displayBoard(array $board)
{
    foreach ($board as $row) {
        foreach ($row as $column => $element) {
            echo "[$element]";
        }

        echo PHP_EOL;
    }
}

while ($balance > 0) {
    $board = generateBoard($maxRows, $maxColumns, $elements);
    displayBoard($board);

    echo "Your current balance is $balance.\n";
    echo "Do you want to play again? (yes/no): ";

    $input = trim(fgets(STDIN));

    if ($input === 'no') {
        break;
    } elseif ($input === 'yes') {
        $playCost = 10;
        $balance -= $playCost;
    } else {
        echo "Invalid input. Please enter 'yes' or 'no': ";
    }
}

if ($balance > 0) {
    echo "Thanks for playing! Your balance is $balance.";
} else {
    echo "Game over. You lost everything.";
}
