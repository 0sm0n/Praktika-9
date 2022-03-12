<?php

function test($i, $w)
{
    return area($i, $w);
}

function area($i, $w)
{
    $area = $i * $w;
    return ("Прямоугольник длиной $i и шириной $w имеет площадь $area");
}

echo test(5, 4);