<?php
function formatPhoneNumber($phoneNumber)
{
    $flag = substr($phoneNumber, 0, 2);
    if ($flag !== "09") return NULL;
    return "+98" . substr($phoneNumber, 1);
}
