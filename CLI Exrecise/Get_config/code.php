<?php

function getConfig($key)
{
    $conf = include("config.php");
    return array_key_exists($key, $conf) ? $conf[$key] : NULL;
}
