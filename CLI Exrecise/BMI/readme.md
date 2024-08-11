# BMI Calculator
Simple BMI calculator with PHP
```php
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

?>
```
In this exercise, I learned how to:
1. Get input from users using the `readline()` function
2. Make multiple comparisons using the `match()` expression

I found that using the `match()` syntax significantly improves code readability. 

BMI formula:

$$
\text{BMI} = \frac{\text{Weight}}{\text{Height}^2}
$$

Weight is in kilograms and height is in meters.
