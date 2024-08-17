<?php
function scientific_notation(string $number): string
{
    if ($number == 0) {
        return "0";
    }
    $is_negative = $number < 0;
    $abs_number = $is_negative ? substr($number, 1) : $number;
    $parts = explode('.', $abs_number);
    $int_part = $parts[0];
    $fractional_part = $parts[1] ?? '';

    if ($int_part == 0) {
        $digits = str_split((string)((int)$fractional_part));
        $base = $digits[0];
        $rest = implode(array_slice($digits, 1));
        $after_point = ($rest == 0 || empty($rest)) ? '' : ".{$rest}";
        $mantissa = strpos($number, $base) + 1;
        $result = "{$base}{$after_point}e-{$mantissa}";
    } else {
        $digits = str_split((string)((int)$int_part));
        $base = $digits[0];
        $rest = implode(array_slice($digits, 1));
        $mantissa = strlen($int_part) - 1;

        if ($fractional_part !== '') {
            $after_point = "{$rest}{$fractional_part}";
            $after_point = ($after_point == 0 || empty($after_point)) ? "" : ".{$after_point}";
        } else {
            $after_point = ($rest == 0 || empty($rest)) ? '' : ".{$rest}";
        }
        $result = "{$base}{$after_point}e{$mantissa}";
    }
    return $is_negative ? "-{$result}" : $result;
}

$number = trim(readline());
$res = scientific_notation($number);
echo $res;
