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
