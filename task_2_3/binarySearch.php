<?php

function binarySearch($newArray, $num) {

    $start = 0;
    $end = count($newArray) - 1;
    $n = 0;

    while ($start <= $end) {
        $n++;

        $base = floor(($start + $end) / 2);


        echo "Проверяется элемент с индексом: $base" . '<br>';

        if ($newArray[$base] == $num) {
            echo "Количество итераций: $n искомого числа $num под индексом $base" . '<br>';
            return $base;
        } elseif ($newArray[$base] < $num) {
            $start = $base + 1;
        } else {
            $end = $base - 1;
        }
    }
    echo "ЧИСЛО НЕ НАЙДЕНО!" . '<br>'; 
    echo "Количество итераций: $n -- $newArray[$base] -- $num" . '<br>';
    return null;
}