<?php

function diff(int $a, int $b): bool
{
    if($a == 15 || $b == 15)
    {
        return true;
    }

    if(($a + $b) == 15 || ($a - $b) == 15 || ($b - $a) == 15)
    {
        return true;
    }
    return false;
}

$a= (int) readline("Enter A: ");
$b= (int) readline("Enter B: ");

if(diff($a,$b))
{
    echo "statement is true";
} else {
    echo "statement is false";
}
