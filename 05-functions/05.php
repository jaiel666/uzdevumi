<?php
$fruits = [
    ["name" => "Apple", "weight" => 8],
    ["name" => "Banana", "weight" => 12],
    ["name" => "Orange", "weight" => 6],
    ["name" => "Watermelon", "weight" => 15]
];

$shippingCosts = [
    "under_10kg" => 1, // 1 euro for less than 10kg
    "over_10kg" => 2   // 2 euros for 10kg or more
];
<<<<<<< HEAD
function isOver10kg($weight)
{
=======

function isOver10kg($weight) {
>>>>>>> 5766d1b72bfcb90bf1879d33a8d3c05c78b9a999
    return $weight > 10;
}

foreach ($fruits as $fruit) {
    $name = $fruit["name"];
    $weight = $fruit["weight"];
    if (isOver10kg($weight)) {
        $costPerKg = $shippingCosts["over_10kg"];
    } else {
        $costPerKg = $shippingCosts["under_10kg"];
    }
    $shippingCost = $weight * $costPerKg;

    echo "Fruit: {$name}, Weight: {$weight}kg, Shipping Cost: {$shippingCost} euros\n";
}