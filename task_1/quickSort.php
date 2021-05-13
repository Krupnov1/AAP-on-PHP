<?php

include 'createArray.php';

function quickSort($array) {
    $arrCount = count($array);

    if ($arrCount <= 1) {
        return $array;
    }

    $base = $array[0];
    $left = [];
    $right = [];

    for ($i = 1; $i < $arrCount; $i++) {          //O(n*log(n))

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

$start = microtime(true);
$array = createArray(10000);
echo "Создание массива со случайными элементами: ".( microtime(true) - $start).PHP_EOL;
echo "<br>"; 
//print_r($array);
//var_dump($array);

echo "<br>";
echo "<br>";

$start = microtime(true);
$newArray = quickSort($array);
echo "Быстрая сортировка: ".( microtime(true) - $start).PHP_EOL;  // 0.161
echo "<br>";
print_r($newArray);
//var_dump($newArray);