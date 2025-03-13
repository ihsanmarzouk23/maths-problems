<?php
// Define an array of numbers
$numbers = [1, 2, 3, 4, 5];

// Use the PHP rand function to get a random index from the array
$randomIndex = rand(0, count($numbers) - 1);

// Return the number at the random index
return $numbers[$randomIndex];
?>
