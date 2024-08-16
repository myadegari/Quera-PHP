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
        $head = end($stack); // $stack[count($stack) - 1] == end($stack)
        if ($head != $pop_rules[$char] || empty($stack)) {
            echo 'NO';
            exit;
        }
        array_pop($stack);
    }
}
echo empty($stack) ? 'YES' : 'NO';
