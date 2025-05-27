<?php
// Define an array of mathematical constants and functions

function area($base, $height) {
    return $base * $height;
}

function perimeter($side1, $side2) {
    return 2 * ($side1 + $side2);
}

// Example usage
$area = area(5, 3); // Calculate the area of a rectangle with base 5 and height 3
echo "The area is: " . $area;

$perimeter = perimeter(4, 6); // Calculate the perimeter of a square with sides 4
echo "The perimeter is: " . $perimeter;
