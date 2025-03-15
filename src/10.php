<?php

function getRandomMathProblem() {
    $numbers = array(2, 5, 7);
    shuffle($numbers);
    $a = $numbers[0];
    $b = $numbers[1];
    $c = $numbers[2];
    return "$a x $b + $c =";
}

?>
