# Format card number

```php
<?php

function formatCardNumber($n)
{
    $CHUNK = 4;
    $CARD_NUMBER_LENGTH = 16;

    if (!ctype_digit($n) || strlen($n) != $CARD_NUMBER_LENGTH) return NULL;

    $formatted_number = substr($n, 0, $CHUNK);
    for ($i = 1; $i < $CHUNK; $i++) {
        $formatted_number = $formatted_number . " " . substr($n, $i * $CHUNK, $CHUNK);
    }
    return $formatted_number;
}

?>
```
learn about `ctype_digit` function and it's difference with `is_numeric` function.

`ctype_digit` function check if the string is only contain digits or not but `is_numeric` function check if any number is in string or not.

$$
5892101011106123 \rightarrow 5892\quad1010\quad1110\quad6123
$$