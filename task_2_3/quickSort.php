<?php

function quickSort($array) {
    $arrCount = count($array);

    if ($arrCount <= 1) {
        return $array;
    }

    $base = $array[0];
    $left = [];
    $right = [];

    for ($i = 1; $i < $arrCount; $i++) {        

        if ($base >= $array[$i]) {
            $left[] = $array[$i];
        } else {
            $right[] = $array[$i];
        }
    }

    $left = quickSort($left);
    $right = quickSort($right);

    return array_merge($left, [$base], $right);
}
