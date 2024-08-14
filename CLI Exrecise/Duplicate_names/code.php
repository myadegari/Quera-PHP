<?php
$ARRAY_SIZE = (int)readline();
$names = [];
for ($i = 0; $i < $ARRAY_SIZE; $i++) {
    $name = readline();
    $names[$name] = (isset($names[$name]) ? $names[$name] + 1 : 1);
    if ($names[$name] ==2 ) {
        echo $name . "\n";
    }
}
