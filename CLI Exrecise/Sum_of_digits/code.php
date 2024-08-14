<?php

$number = readline();
$length = strlen($number);
$sum = 0;
for ($i = 0; $i < $length; $i++) {
    $sum += $number[$i];
}
echo $sum;
