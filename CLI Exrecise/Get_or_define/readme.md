# Get or define

```php
<?php

function getOrDefine($constant_name, $value)
{
    if (defined($constant_name)) return constant($constant_name);
    define($constant_name, $value);
    return constant($constant_name);
}

?>
```
Learning about `define` function and `constant` in php.