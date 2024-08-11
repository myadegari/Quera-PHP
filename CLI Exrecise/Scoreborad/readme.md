# Scoreboard

in this exercise we have a scoreboard and we want to know who is the winner. for example, we have 3 players and 4 rounds. after last round with the scoreboard we show the winner.

```php
<?php

$ARRAY_SIZE = 3;
$INPUT_LINES = 8;
$scoreboard = [];

for ($i = 0; $i < $ARRAY_SIZE; $i++) {
    $key = readline();
    $scoreboard[$key] = 0;
}

for ($i = 0; $i < $INPUT_LINES; $i++) {
    $status = $i % 2 ? 'get_value' : 'get_key';
    switch ($status) {
        case 'get_key':
            $key = readline();
            break;
        case 'get_value':
            $value = readline();
            $scoreboard[$key] += $value;
            break;
        default:
            break;
    }
}

$max = 0;
$max_index = 0;
$keys = array_keys($scoreboard);
for ($i = 0; $i < $ARRAY_SIZE; $i++) {
    $pointer = $keys[$i];
    if ($max <= $scoreboard[$pointer]) {
        $max = $scoreboard[$pointer];
        $max_index = $pointer;
    }
}
echo $max_index;

?>
```
in this exercise, I learned how to work with `associative arrays` in PHP.