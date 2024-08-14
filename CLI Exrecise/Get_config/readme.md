# Get config

```php
<?php

function getConfig($key)
{
    $conf = include("config.php");
    return array_key_exists($key, $conf) ? $conf[$key] : NULL;
}

?>
```
Learning about ways to import files in php:
- include
- include_one
- require
- require_one

the difference between them is that include and include_one will not stop the script if the file is not found, but require and require_one will stop the script if the file is not found.
