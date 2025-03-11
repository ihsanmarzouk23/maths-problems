<?php
// Generate a random number between 1 and 10
$randomNumber = mt_rand(1, 10);

// Ask the user to guess the number
echo "Guess the number between 1 and 10: ";
$userInput = trim(fgets(STDIN));

// Check if the user's input is equal to the random number
if ($userInput == $randomNumber) {
    echo "You got it! The number was $randomNumber";
} else {
    echo "Sorry, the correct answer is $randomNumber.";
}
?>