<?php

$board = [
    [' ', ' ', ' '],
    [' ', ' ', ' '],
    [' ', ' ', ' ']
];
$players = ['X', 'O'];
$real_player = 0;
$computer_player = 1;

function display_board($board)
{
    foreach ($board as $row) {
        echo implode(' | ', $row) . "\n";
        echo "---------\n";
    }
}
function computer_move($board)
{
    do {
        $row = rand(0, 2);
        $col = rand(0, 2);
    } while ($board[$row][$col] !== ' ');

    return [$row, $col];
}
function is_winner($board, $element)
{
    for ($i = 0; $i < 3; $i++) {
        if (($board[$i][0] === $element && $board[$i][1] === $element && $board[$i][2] === $element) ||
            ($board[0][$i] === $element && $board[1][$i] === $element && $board[2][$i] === $element) ||
            ($board[0][0] === $element && $board[1][1] === $element && $board[2][2] === $element) ||
            ($board[0][2] === $element && $board[1][1] === $element && $board[2][0] === $element)) {
            return true;
        }
    }
    return false;
}

function is_board_full($board)
{
    foreach ($board as $row) {
        foreach ($row as $cell) {
            if ($cell === ' ') {
                return false;
            }
        }
    }
    return true;
}

function play_game($board, $players, $real_player, $computer_player)
{
    echo "Tic-Tac-Toe\n";
    display_board($board);

    while (true) {
        if ($real_player === $computer_player) {
            list($row, $col) = computer_move($board);
            echo "Computer chooses location: $row $col\n";
        } else {
            echo "Player choose your location (row, column): ";
            $input = readline();
            list($row, $col) = explode(' ', $input);
        }

        if ($row < 0 || $row > 2 || $col < 0 || $col > 2 || $board[$row][$col] !== ' ') {
            echo "Incorrect move try again.\n";
            continue;
        }

        $board[$row][$col] = $players[$real_player];
        display_board($board);

        if (is_winner($board, $players[$real_player])) {
            if ($real_player === $computer_player) {
                echo "Computer wins!\n";
            } else {
                echo "Player wins!\n";
            }
            break;
        }

        if (is_board_full($board)) {
            echo "The game is a tie.\n";
            break;
        }

        $real_player = 1 - $real_player;
    }
}

play_game($board, $players, $real_player, $computer_player);
