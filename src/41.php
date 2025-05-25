<?php
function addDigits($number) {
    while ($number > 9) {
        $sum = 0;
        while ($number != 0) {
            $digit = $number % 10;
            $sum += $digit;
            $number /= 10;
        }
        $number = $sum;
    }
    return $number;
}

$inputNumber = 12345;
echo "The sum of the digits in $inputNumber is: " . addDigits($inputNumber);
?>
