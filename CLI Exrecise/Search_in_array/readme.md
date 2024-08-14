# Search in array

```php
<?php

$array_size = (int)readline();
$target = (string)readline();
$studentList = [];
for ($i = 0; $i < $array_size; $i++) {
    $studentName = (string)readline();
    $studentList[] = $studentName;
}
$res = in_array($target, $studentList) ? "YES" : "NO";
echo $res;

?>
```