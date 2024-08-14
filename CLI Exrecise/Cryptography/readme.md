# Cryptography

```php
<?php
const LOWER_CASE = "abcdefghijklmnopqrstuvwxyz";
const UPPER_CASE = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
function shift_char($char, $shift, $direction)
{
    $alphabet = ctype_lower($char) ? LOWER_CASE : UPPER_CASE;
    $index = strpos($alphabet, $char);
    if ($index === false) return $char;
    $shifted_index = (($index + $direction * $shift) % 26 + 26) % 26;
    return $alphabet[$shifted_index];
}

function encrypt($str, $n)
{
    if (empty(trim($str))) return $str;
    $result = "";
    for ($i = 0; $i < strlen($str); $i++) {
        $result .= shift_char($str[$i], $n, +1);
    }
    return $result;
}

function decrypt($str, $n)
{
    if (empty(trim($str))) return $str;
    $result = "";
    for ($i = 0; $i < strlen($str); $i++) {
        $result .= shift_char($str[$i], $n, -1);
    }
    return $result;
}

?>
```