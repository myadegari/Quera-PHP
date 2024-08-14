<?php
function getHighestPrice()
{
    global $data;
    if (sizeof($data) == 0) return null;
    usort($data, function ($a, $b) {
        return $b['price'] - $a['price'];
    });
    return $data[0]['name'];
}
