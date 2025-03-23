<?php
// Problem: Find the missing number in an array of integers.
function findMissingNumber(array $numbers) {
    $total = count($numbers);
    $sumOfNumbers = $total * ($total + 1) / 2;
    $currentSum = 0;

    foreach ($numbers as $number) {
        $currentSum += $number;
    }

    return $sumOfNumbers - $currentSum;
}

// Example usage:
$numbers = [3, 7, 1, 4, 6];
echo "The missing number is: " . findMissingNumber($numbers) . "\n";
