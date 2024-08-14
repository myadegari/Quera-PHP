<?php
function isPrime($n)
{
    if ($n == 1 || $n == 0) {
        return false;
    }
    for ($number = 2; $number <= sqrt($n); $number++) {
        if ($n % $number == 0) {
            return false;
        }
    }
    return true;
}
