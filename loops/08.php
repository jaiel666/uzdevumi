<?php
class NumberSquare {
    public static function minmax() {
        echo "Min? ";
        $min = readline();

        echo "Max? ";
        $max = readline();

        if ($min > $max) {
            echo "Min should be less than or equal to Max.\n";
            return;
        }