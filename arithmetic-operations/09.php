<<<<<<< HEAD
<?php
function calculateBMI($weight, $height, $unit) {
    if ($unit === "metric") {
        $height = $height / 100;
        return number_format($weight / ($height * $height), 2);
    } elseif ($unit === "imperial") {
        return number_format(($weight * 703) / ($height * $height), 2);
    } else {
        return null;
    }
}
function determineWeightStatus($bmi) {
    if ($bmi < 18.5) {
        return "underweight";
    } elseif ($bmi >= 18.5 && $bmi <= 25) {
        return "optimal weight";
    } else {
        return "overweight";
    }
}

$unit = readline("Enter unit (metric/imperial): ");
$weight = readline("Enter weight: ");
$height = readline("Enter height: ");
$bmi = calculateBMI($weight, $height, $unit);

if ($bmi !== null) {
    $weightStatus = determineWeightStatus($bmi);
    echo "BMI: $bmi\n";
    echo "Weight status: $weightStatus\n";
} else {
    echo "Invalid unit please enter metric or imperial\n";
}

=======
<?php

function calculateBMI($weight, $height, $unit) {
    if ($unit === "metric") {
        $height = $height / 100;
        return number_format($weight / ($height * $height), 2);
    } elseif ($unit === "imperial") {
        return number_format(($weight * 703) / ($height * $height), 2);
    } else {
        return null;
    }
}
function determineWeightStatus($bmi) {
    if ($bmi < 18.5) {
        return "underweight";
    } elseif ($bmi >= 18.5 && $bmi <= 25) {
        return "optimal weight";
    } else {
        return "overweight";
    }
}

$unit = readline("Enter unit (metric/imperial): ");
$weight = readline("Enter weight: ");
$height = readline("Enter height: ");
$bmi = calculateBMI($weight, $height, $unit);

if ($bmi !== null) {
    $weightStatus = determineWeightStatus($bmi);
    echo "BMI: $bmi\n";
    echo "Weight status: $weightStatus\n";
} else {
    echo "Invalid unit please enter metric or imperial\n";
}

>>>>>>> 5766d1b72bfcb90bf1879d33a8d3c05c78b9a999
