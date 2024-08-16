<?php

const INITIAL_PRICE = 0;
$number_of_items = readline();
$number_of_promotion_items = readline();
$items = [];

for ($i = 0; $i < $number_of_items; $i++) {
    $item = readline();
    $items[$item] = INITIAL_PRICE;
}
foreach ($items as $item => $price) {
    $item_price = readline();
    $items[$item] = $item_price;
}

asort($items);
$promotion_items = array_slice($items, 0, $number_of_promotion_items, true);

foreach ($promotion_items as $item => $price) {
    printf("%s:%s\n", $item, $price);
}
