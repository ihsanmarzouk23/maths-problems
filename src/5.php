 <?php

$numbers = array(1, 2, 3, 4, 5);

function sum($numbers) {
    $sum = 0;
    foreach ($numbers as $number) {
        $sum += $number;
    }
    return $sum;
}

$result = sum($numbers);
echo $result;

?>