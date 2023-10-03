<?php

class RollTwoDice
{
    public static function dice()
    {
        echo "Desired sum: ";
        $desiredSum = readline();

        if ($desiredSum < 2 || $desiredSum > 12) {
            echo "Please enter a valid sum between 2 and 12.\n";
            return;
        }

        while (true) {
            $dice1 = rand(1, 6);
            $dice2 = rand(1, 6);
            $sum = $dice1 + $dice2;

            echo "$dice1 and $dice2 = $sum\n";

            if ($sum == $desiredSum) {
                break;
            }
        }
    }
}

RollTwoDice::dice();
