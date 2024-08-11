<?php
$height = readline();
$weight = readline();
$bmi = $weight / ($height ** 2);
$res = match(true){
    $bmi < 18.5 => "Underweight",
    $bmi < 25 => "Normal",
    $bmi < 30 => "Overweight",
    default => 'Obese'
};
echo $res;