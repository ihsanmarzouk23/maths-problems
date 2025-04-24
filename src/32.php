<?php
$sum = 0;
for ($i = 1; $i <= 5; $i++) {
    if (floor($i / 2) == $i || floor($i / 2 - 1) == $i || floor($i / 2 + 1) == $i || $i % 3 == 0) {
        $sum += $i;
    }
}
echo "The sum of numbers greater than or equal to $\$i is: $sum";
?>
