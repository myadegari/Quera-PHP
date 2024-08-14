<?php
function getExtension(string $str): string
{
    $str = explode('.', $str);
    if (sizeof($str) > 1) {
        return $str[sizeof($str) - 1];
    }
    return "";
}
