<?php

function createArray($n) {
    $array = [];
    for ($i = 1; $i < $n; $i++){
        $a = rand(0, 500000);
        /*if (in_array($a, $array)) {
            continue;
        };*/
        $array[] = $a;
    };
    return $array; 
};

/*$start = microtime(true);
$array = createArray(100000);
echo "Создание массива со случайными элементами: ".( microtime(true) - $start).PHP_EOL;
echo "<br>";*/
//print_r($array);
//var_dump($array);



