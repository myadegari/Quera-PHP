# Format phone number

```php
<?php

function formatPhoneNumber($phoneNumber)
{
    $flag = substr($phoneNumber, 0, 2);
    if ($flag !== "09") return NULL;
    return "+98" . substr($phoneNumber, 1);
}

?>
```

Convert iran phone number to international format.

$$
09123456789 \rightarrow +989123456789
$$