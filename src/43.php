<?php
// Define some constants and variables
$students = array(1, 2, 3);
$grades = array("Math", "English", "Science");
$total_points = array_sum($students);

// Calculate the average score
$average_score = $total_points / count($students);

// Determine which students scored more than the average
$students_above_average = array_filter($students, function($student) use ($average_score) {
    return $student > $average_score;
});

// Print the results
echo "Average Score: $average_score\n";
echo "Students with Average Score Higher Than $average_score:\n";
print_r($students_above_average);
?>
