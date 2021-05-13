<?php

include 'createArray.php';
include 'quickSort.php';
include 'binarySearch.php';
include 'deleteNumArray.php';

const NUM = 3;


$start = microtime(true);
$array = createArray(30);
echo "Создание массива со случайными элементами: ".( microtime(true) - $start).PHP_EOL;
echo "<br>";
//print_r($array);
//var_dump($array);

echo "<br>";

$start = microtime(true);
$newArray = quickSort($array);
echo "Быстрая сортировка: ".( microtime(true) - $start) . '<br>';
echo "<br>";
//print_r($newArray);
var_dump($newArray);

echo "Бинарный поиск" . '<br>';
$key = binarySearch($newArray, NUM).PHP_EOL;

if ($key === "ЧИСЛО НЕ НАЙДЕНО!") {
    echo $key;
} else {
    deleteNumber($key, $newArray, NUM);
} 

