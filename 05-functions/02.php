<?php
function multiply($base, $multiplier) {
    $result = $base * $multiplier;
    echo $result;
}

$baseValue = readline("Enter base value: ");
$multiplier = readline("Enter muiltiplier: ");
multiply($baseValue, $multiplier);