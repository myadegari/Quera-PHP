<?php

/**
 * Summary of findPhoneNumbers
 * find phone numbers in text with following rule
 * phone number should start with 09 or +9891 and 9 digits
 * @param string $text
 * @return array
 */
function findPhoneNumbers(string $text): array
{
    $pattern = '/(?<!\d|\+|\w)(?:(?:09\d{9})|(?:\+9891\d{8}))(?!\d|\w)/';
    preg_match_all($pattern, $text, $results);
    return $results[0] ?? [];
}

/**
 * Summary of findHashtags
 * find hashtags in text with following rule
 * start with # sign and min 2 characters
 * @param string $text
 * @return array
 */
function findHashtags(string $text): array
{

    $pattern = '/\B#[a-zA-Z0-9]{2,}(?=\s|$)\b/';
    preg_match_all($pattern, $text, $results);
    return $results[0] ?? [];
}

/**
 * Summary of boldEmails
 * find emails and make them bold
 * @param string $text
 * @return string
 */
function boldEmails(string $text): string
{
    $pattern = '/\b[\w\.]+@[a-zA-Z0-9]+\.[a-zA-Z]{3}\b/';
    return preg_replace($pattern, '<b>$0</b>', $text);
}
