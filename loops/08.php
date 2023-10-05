<?php
class NumberSquare {
    public static function minmax()
    {
        echo "Min? ";
        $min = intval(readline());

        echo "Max? ";
        $max = intval(readline());

        if ($min > $max) {
            echo "Min should be less than or equal to Max.\n";
        } else {
            for ($i = 0; $i <= $max - $min; $i++) {
                for ($x = $min; $x <= $max; $x++) {
                    $value = $x + $i;
                    if ($value > $max) {
                        echo $value - ($max - $min) - 1;
                    } else {
                        echo $value;
                    }
                }
                echo "\n";
            }
        }
    }
}

NumberSquare::minmax();
