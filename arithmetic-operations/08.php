<<<<<<< HEAD
<?php
function calculatePay($basePay, $hoursWorked) {
    $minWage = 8.00;
    $maxHours = 60;
    $overtimeRate = 1.5;
    $regularHours = 40;

    if ($basePay < $minWage) {
        return "Error - Base pay is less than minimum wage.";
    }

    if ($hoursWorked > $maxHours) {
        return "Error - Hours worked are over the limit.";
    }

    if ($hoursWorked <= 40) {
        $totalPay = $basePay * $hoursWorked;
    } else {
        $overtimeHours = $hoursWorked - $regularHours;
        $overtimePay = $basePay * $overtimeRate * $overtimeHours;
        $regularPay = $basePay * $regularHours;
        $totalPay = $regularPay + $overtimePay;
    }

    return "Total pay: $" . number_format($totalPay, 2);
}

echo "Employee 1: " . calculatePay(7.50, 35) . "\n";
echo "Employee 2: " . calculatePay(8.20, 47) . "\n";
=======
<?php
function calculatePay($basePay, $hoursWorked) {
    $minWage = 8.00;
    $maxHours = 60;
    $overtimeRate = 1.5;
    $regularHours = 40;

    if ($basePay < $minWage) {
        return "Error - Base pay is less than minimum wage.";
    }

    if ($hoursWorked > $maxHours) {
        return "Error - Hours worked are over the limit.";
    }

    if ($hoursWorked <= 40) {
        $totalPay = $basePay * $hoursWorked;
    } else {
        $overtimeHours = $hoursWorked - $regularHours;
        $overtimePay = $basePay * $overtimeRate * $overtimeHours;
        $regularPay = $basePay * $regularHours;
        $totalPay = $regularPay + $overtimePay;
    }

    return "Total pay: $" . number_format($totalPay, 2);
}

echo "Employee 1: " . calculatePay(7.50, 35) . "\n";
echo "Employee 2: " . calculatePay(8.20, 47) . "\n";
>>>>>>> 5766d1b72bfcb90bf1879d33a8d3c05c78b9a999
echo "Employee 3: " . calculatePay(10.00, 73) . "\n";