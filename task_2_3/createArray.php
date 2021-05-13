<?php

function createArray($n) {
    $array = [];
    for ($i = 1; $i < $n; $i++){
        $a = rand(0, 30);
        /*if (in_array($a, $array)) {
            continue;
        };*/
        $array[] = $a;
    };
    return $array; 
};



