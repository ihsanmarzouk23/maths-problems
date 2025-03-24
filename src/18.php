<?php
    function isPrime($num) {
        if ($num <= 1) {
            return false;
        }
        for ($i = 2; $i * $i <= $num; $i++) {
            if ($num % $i == 0) {
                return false;
            }
        }
        return true;
    }

    function calculateGCD($a, $b) {
        while ($b != 0) {
            $temp = $a % $b;
            $a = $b;
            $b = $temp;
        }
        return $a;
    }

    function findFactorsOfNumber($number) {
        $factors = [];
        for ($i = 1; $i <= $number; $i++) {
            if ($number % $i == 0) {
                array_push($factors, $i);
            }
        }
        return $factors;
    }

    function calculateSumOfOddNumbers($count) {
        $sum = 0;
        for ($i = 1; $i <= $count; $i++) {
            if ($i % 2 != 0) {
                $sum += $i;
            }
        }
        return $sum;
    }

    function calculateAverage($array, $threshold = null) {
        $count = count($array);
        if (is_array($threshold)) {
            foreach ($array as $value) {
                if ($value >= $threshold) {
                    array_push($array, $value);
                }
            }
        } else {
            $average = 0;
            for ($i = 0; $i < $count; $i++) {
                if ($array[$i] >= $threshold) {
                    $average += $array[$i];
                }
            }
            $average /= count($array);
        }
        return $average;
    }

    function displayPrimeFactorsOfNumber($number) {
        $primeFactors = [];
        while ($number % 2 == 0) {
            array_push($primeFactors, 2);
            $number /= 2;
        }
        for ($i = 3; $i <= sqrt($number); $i += 2) {
            while ($number % $i == 0) {
                if (isPrime($i)) {
                    array_push($primeFactors, $i);
                } else {
                    return "Error: Not a prime number.";
                }
                $number /= $i;
            }
        }
        if ($number > 1) {
            array_push($primeFactors, $number);
        }
        return implode(', ', $primeFactors);
    }

    function calculateGCDAndLCM($a, $b) {
        $gcd = isPrime(abs($a)) && isPrime(abs($b)) ? abs($a) : 0;
        lcm = ($a * $b) / $gcd;
        return [lcm, $gcd];
    }

?>
