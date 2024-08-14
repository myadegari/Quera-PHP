# Sum of digits

```php
<?php

$number = readline();
$length = strlen($number);
$sum = 0;
for ($i = 0; $i < $length; $i++) {
    $sum += (int)$number[$i];
}
echo $sum;

?>
```
example:
$$
987301 \rightarrow 9+8+7+3+0+1 = 28
$$