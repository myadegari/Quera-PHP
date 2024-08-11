# Is there
Simple program to check if a thing is in a given array or not.
```php
<?php

$ARRAY_SIZE = 5;
$input = [];
for ($i = 0; $i < $ARRAY_SIZE; $i++) {
    $input[] = readline();
}
$target = readline();
$find = false;
for ($i = 0; $i < $ARRAY_SIZE; $i++) {
    if ($input[$i] === $target) {
        $find = true;
        break;
    }
}
$res = $find ? 'YES' : 'NO';
echo $res;

?>
```
In this exercise, I learned how to work with arrays in PHP.