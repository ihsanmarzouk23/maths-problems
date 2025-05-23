<?php
// Sample PHP code for generating random math problems

function solveMathProblem() {
    $randomQuestion = "What is the result of 2 + 3? ";
    
    // Generate a question and answer pair
    $answer1 = $randomQuestion . " = 5";
    $correctAnswer = 5;
    
    return [
        'question' => $randomQuestion,
        'answer'   => $answer1,
        'correctAnswer' => $correctAnswer
    ];
}

// Example usage:
$problemSet = solveMathProblem();
print_r($problemSet);
?>
