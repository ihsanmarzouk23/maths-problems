<?php
// Define some variables
$student_name = "Alice";
$math_score = 85;
$average_grade = $math_score / 2;

// Display some information
echo "Student Name: " . $student_name . "\n";
echo "Math Score: " . $math_score . "\n";
echo "Average Grade: " . $average_grade . "\n";

// Example of how to calculate the average of multiple scores (using PHP)
$test_scores = [90, 85, 76];
$total_score = array_sum($test_scores);
$averagetotal = $total_score / count($test_scores);
echo "Total Score: " . $total_score . "\n";
echo "Average Score: " . $averagetotal . "\n";

// Example of how to round a number
$\number = 3.14159;
$\rounded_number = round($number, 2); // Rounding the number to two decimal places

// Display rounded result
echo "Rounded Number: " . $rounded_number . "\n";
?>
