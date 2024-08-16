# Simple stack


```php
<?php

$stack = [];
$input = trim(readline());
$input_length = strlen($input);
$pop_rules = [
    ')' => '(',
    ']' => '[',
    '}' => '{',
];

for ($i = 0; $i < $input_length; $i++) {
    $char = $input[$i];
    if (in_array($char, ['(', '[', '{'])) {
        $stack[] = $char;
    } else {
        $head = end($stack);
        if ($head != $pop_rules[$char] || empty($stack)) {
            echo 'NO';
            exit;
        }
        array_pop($stack);
    }
}
echo empty($stack) ? 'YES' : 'NO';

?>
```
>[!NOTE]
I learn about how using array like a stack in php and difference between `array_push` with `$array[] = $value`
and `end(array)` is equivalent for `$array[count($array)-1]`.