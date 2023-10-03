<?php

class Piglet
{
    public static function pigletgame()
    {
        echo "Welcome to Piglet!\n";
        $totalScore = 0;

        while (true) {
            $roll = rand(1, 6);
            echo "You rolled a $roll!\n";

            if ($roll == 1) {
                echo "You got 0 points.\n";
                break;
            }

            $totalScore += $roll;
            echo "Roll again? ";
            $input = strtolower(readline());

            if ($input !== 'yes') {
                echo "You got $totalScore points.\n";
                break;
            }
        }
    }
}
Piglet::pigletgame();
