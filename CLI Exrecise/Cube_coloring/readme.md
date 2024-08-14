# Cube Coloring

In this exercise we want to color a cube. The cube is represented by a 3D array. we color the cube like this:
$$
Cube=
\begin{bmatrix}
1 & 1 & \ldots & 1 & 1 \cr
1 & 1 & \ldots & 1 & 1 \cr
\vdots & \vdots & \ddots & \vdots & \vdots \cr
1 & 1 & \ldots & 1 & 1 \cr
1 & 1 & \ldots & 1 & 1
\end{bmatrix}
\begin{bmatrix}
1 & 1 & \ldots & 1 & 1 \cr
1 & 0 & \ldots & 0 & 1 \cr
\vdots & \vdots & \ddots & \vdots & \vdots \cr
1 & 0 & \ldots & 0 & 1 \cr
1 & 1 & \ldots & 1 & 1
\end{bmatrix}
\ldots
\begin{bmatrix}
1 & 1 & \ldots & 1 & 1 \cr
1 & 0 & \ldots & 0 & 1 \cr
\vdots & \vdots & \ddots & \vdots & \vdots \cr

1 & 0 & \ldots & 0 & 1 \cr
1 & 1 & \ldots & 1 & 1
\end{bmatrix}
\begin{bmatrix}
1 & 1 & \ldots & 1 & 1 \cr
1 & 1 & \ldots & 1 & 1 \cr
\vdots & \vdots & \ddots & \vdots & \vdots \cr
1 & 1 & \ldots & 1 & 1 \cr
1 & 1 & \ldots & 1 & 1
\end{bmatrix}
$$

```php
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

?>
```
In this exercise I learn about pass by reference in php and multidimensional array.
