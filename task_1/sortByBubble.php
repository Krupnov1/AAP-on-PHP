<?php

include 'createArray.php';

function bubbleSort($array) {

    for ($i = 0; $i < count($array); $i++) {
        $count = count($array);
        for ($j = $i + 1; $j < $count; $j++) {             //O(n^2)
            if ($array[$i] > $array[$j]) {
                $temp = $array[$j];
                $array[$j] = $array[$i];
                $array[$i] = $temp;
            }
        }
    }
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
$newArray = bubbleSort($array);
echo "Сортировка пузырьком: ".( microtime(true) - $start).PHP_EOL;  // 34.584
echo "<br>";
print_r($newArray);
//var_dump($newArray);

