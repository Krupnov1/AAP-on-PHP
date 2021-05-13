<?php

include 'createArray.php';

function shakerSort($array) {

    $n = count($array);
    $left = 0;
    $right = $n - 1;

    do {
        for ($i = $left; $i < $right; $i++) {
            if ($array[$i] > $array[$i + 1]) {
                list($array[$i], $array[$i + 1]) = array($array[$i + 1],     //O(n^2)
                $array[$i]);
            }
        }

    $right -= 1;

        for ($i = $right; $i > $left; $i--) {
            if ($array[$i] < $array[$i - 1]) {
                list($array[$i], $array[$i - 1]) = array($array[$i - 1],
                $array[$i]);
            }
        }

    $left += 1;

    } while ($left <= $right);

    return $array;
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
$newArray = shakerSort($array);
echo "Шейкерная сортировка: ".( microtime(true) - $start).PHP_EOL;  // 40.541
echo "<br>";
print_r($newArray);
//var_dump($newArray);
    