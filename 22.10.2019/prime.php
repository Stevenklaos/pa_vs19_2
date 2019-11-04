<?php

function isPrime($number) {
    if($number < 2) {
        echo 'This number is not valid';
    } else {
        $divider = 2;
        while ($number % $divider != 0) {
            $divider++;
        }
        if($number == $divider) {
            echo $number.' is prime number<br>';
        } else {
            echo $number.' is not a prime number<br>';
        }
    }
    return $result;
}

$result = isPrime(rand(0, 99));
echo $result;