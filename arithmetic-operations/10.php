<<<<<<< HEAD
<?php
function circleArea($radius) {
    if ($radius < 0) {
        return "Error - Negative radius.";
    }
    return round(M_PI * $radius * 2, 2);
}
function rectangleArea($length, $width) {
    if ($length < 0 || $width < 0) {
        return "Error - Negative length or width";
    }
    return $length * $width;
}
function triangleArea($base, $height) {
    if ($base < 0 || $height < 0) {
        return "Error - Negative base or height";
    }
    return round($base * $height * 0.5, 2);
}

echo "Geometry Calculator\n";
echo "1. Calculate the Area of a Circle\n";
echo "2. Calculate the Area of a Rectangle\n";
echo "3. Calculate the Area of a Triangle\n";
echo "4. Quit\n";

while (true) {
    echo "Enter your choice (1-4): ";
    $choice = readline();

    if ($choice == 1) {
        echo "Enter the radius of the circle: ";
        $radius = readline();
        echo "Area of the circle: " . circleArea($radius) . "\n";
    } elseif ($choice == 2) {
        echo "Enter the length of the rectangle: ";
        $length = readline();
        echo "Enter the width of the rectangle: ";
        $width = readline();
        echo "Area of the rectangle: " . rectangleArea($length, $width) . "\n";
    } elseif ($choice == 3) {
        echo "Enter the base of the triangle: ";
        $base = readline();
        echo "Enter the height of the triangle: ";
        $height = readline();
        echo "Area of the triangle: " . triangleArea($base, $height) . "\n";
    } elseif ($choice == 4) {
        break;
    } else {
        echo "Invalid choice please enter a number from 1 to 4.\n";
    }
=======
<?php
function circleArea($radius) {
    if ($radius < 0) {
        return "Error - Negative radius.";
    }
    return round(M_PI * $radius * 2, 2);
}
function rectangleArea($length, $width) {
    if ($length < 0 || $width < 0) {
        return "Error - Negative length or width";
    }
    return $length * $width;
}
function triangleArea($base, $height) {
    if ($base < 0 || $height < 0) {
        return "Error - Negative base or height";
    }
    return round($base * $height * 0.5, 2);
}

echo "Geometry Calculator\n";
echo "1. Calculate the Area of a Circle\n";
echo "2. Calculate the Area of a Rectangle\n";
echo "3. Calculate the Area of a Triangle\n";
echo "4. Quit\n";

while (true) {
    echo "Enter your choice (1-4): ";
    $choice = readline();

    if ($choice == 1) {
        echo "Enter the radius of the circle: ";
        $radius = readline();
        echo "Area of the circle: " . circleArea($radius) . "\n";
    } elseif ($choice == 2) {
        echo "Enter the length of the rectangle: ";
        $length = readline();
        echo "Enter the width of the rectangle: ";
        $width = readline();
        echo "Area of the rectangle: " . rectangleArea($length, $width) . "\n";
    } elseif ($choice == 3) {
        echo "Enter the base of the triangle: ";
        $base = readline();
        echo "Enter the height of the triangle: ";
        $height = readline();
        echo "Area of the triangle: " . triangleArea($base, $height) . "\n";
    } elseif ($choice == 4) {
        break;
    } else {
        echo "Invalid choice please enter a number from 1 to 4.\n";
    }
>>>>>>> 5766d1b72bfcb90bf1879d33a8d3c05c78b9a999
}