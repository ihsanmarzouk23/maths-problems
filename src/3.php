<?php
function getRandomMathProblem() {
    $numbers = range(0, 10);
    shuffle($numbers);
    $a = array_pop($numbers);
    $b = array_pop($numbers);
    $operator = array_pop($numbers);
    if ($operator === '/') {
        return "$a / $b";
    } else {
        return "$a $operator $b";
    }
}

echo getRandomMathProblem();
?>