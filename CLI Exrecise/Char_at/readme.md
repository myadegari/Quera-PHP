# Character at

```php
<?php

function charAt(string $str, int $pos): string
{
    $length = strlen($str);
    return $str[$pos % $length];
}

?>
```
Learning about type hinting in php.