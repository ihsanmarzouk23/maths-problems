<?php
// Example PHP code to demonstrate various mathematical operations

function addTwoNumbers($a, $b) {
    return $a + $b;
}

function multiplyByThree($number) {
    return $number * 3;
}

function printFizzBuzz(int $number) {
    for ($i = 1; $i <= $number; $i++) {
        if ($i % 3 == 0 && $i % 5 == 0) {
            echo "fizzbuzz\n";
        } elseif ($i % 3 == 0) {
            echo "fizz\n";
        } elseif ($i % 5 == 0) {
            echo "buzz\n";
        } else {
            echo "$i ";
        }
    }
}

// Example usage
echo addTwoNumbers(5); // Outputs: 7
echo multiplyByThree(3); // Outputs: 12

printFizzBuzz(15); // Prints: fizzbuzz

echo $number . "\n";
