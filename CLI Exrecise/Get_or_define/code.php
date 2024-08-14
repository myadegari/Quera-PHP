<?php

function getOrDefine($constant_name, $value)
{
    if (defined($constant_name)) return constant($constant_name);
    define($constant_name, $value);
    return constant($constant_name);
}
