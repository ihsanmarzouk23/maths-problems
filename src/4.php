
<?php

function getRandomMathProblem($length = 10) {
    $min = pow(10, $length - 1);
    $max = pow(10, $length) - 1;
    return rand($min, $max);
}

$problem = getRandomMathProblem();
echo "{$problem}";
?>