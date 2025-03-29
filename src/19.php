<?php
// This PHP code is designed to solve the following mathematical problem:
// Given a quadratic equation ax^2 + bx + c = 0, where a, b, and c are constants.
// Your task is to write a function that takes these parameters as input and returns the discriminant of the equation.

function calculateDiscriminant($a, $b, $c) {
    return pow($b, 2) - 4 * $a * $c;
}

// Example usage:
$discriminant = calculateDiscriminant(1, -3, 2);
echo "The discriminant is: " . $discriminant;
?>
