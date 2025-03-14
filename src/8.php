<?php
// Generate a random number between 1 and 100
$randomNumber = rand(1, 100);

// Ask the user to guess the number
echo "Guess a number between 1 and 100: ";
$guess = readline();

// Check if the guess is correct
if ($guess == $randomNumber) {
    echo "You are correct! The number was {$randomNumber}.\n";
} else {
    echo "Sorry, you are incorrect. The number was {$randomNumber}.\n";
}
?>