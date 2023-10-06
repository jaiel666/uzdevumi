<?php

$surveyed = 12467;
$purchased_energy_drinks = 0.14;
$prefer_citrus_drinks = 0.64;

function calculate_energy_drinkers($surveyed, $purchased_energy_drinks)
{
    return round($surveyed * $purchased_energy_drinks);
}

function calculate_prefer_citrus($surveyed, $prefer_citrus_drinks, $purchased_energy_drinks)
{
    return round(calculate_energy_drinkers($surveyed, $purchased_energy_drinks) * $prefer_citrus_drinks);
}

echo "Total number of people surveyed: " . $surveyed . "\n";
echo "Approximately " . calculate_energy_drinkers($surveyed, $purchased_energy_drinks) . " bought at least one energy drink.\n";
echo "Approximately " . calculate_prefer_citrus($surveyed, $prefer_citrus_drinks, $purchased_energy_drinks) . " of those prefer citrus flavored energy drinks.\n";

