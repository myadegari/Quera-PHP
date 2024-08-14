<?php

function color(&$cube)
{
    $depth = count($cube) - 1;
    $rows = count($cube[0]) - 1;
    $columns = count($cube[0][0]) - 1;

    $INNER_CUBE = 0;
    $OUTER_CUBE = 1;
    $cube = array_fill(0, $depth, array_fill(0, $rows, array_fill(0, $columns, $INNER_CUBE)));

    for ($i = 0; $i <= $depth; $i++) {
        for ($j = 0; $j <= $rows; $j++) {
            for ($k = 0; $k <= $columns; $k++) {
                if ($i == 0 || $i == $depth || $j == 0 || $j == $rows || $k == 0 || $k == $columns) {
                    $cube[$i][$j][$k] = $OUTER_CUBE;
                }
            }
        }
    }
}
