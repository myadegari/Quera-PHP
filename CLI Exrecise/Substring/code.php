<?php

function repeatInString($haystack, $needle): int
{
    if (is_null($haystack) || is_null($needle) || empty(trim($haystack)) || empty(trim($needle))) {
        return 0;
    }
    $count = 0;
    $needle_length = strlen($needle);
    $haystack_length = strlen($haystack);
    for ($i = 0; $i < $haystack_length; $i++) {
        $sub_string = substr($haystack, $i, $needle_length);
        if ($sub_string === $needle) $count++;
    }
    return $count;
}
