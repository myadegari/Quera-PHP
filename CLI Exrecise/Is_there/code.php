<?php
const ARRAY_SIZE = 5;
$input = [];
for ($i = 0; $i < ARRAY_SIZE; $i++) {
    $input[] = readline();
}
$target = readline();
$find = false;
for ($i = 0; $i < ARRAY_SIZE; $i++) {
    if ($input[$i] === $target) {
        $find = true;
        break;
    }
}
$res = $find ? 'YES' : 'NO';
echo $res;
