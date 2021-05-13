<?php

function deleteNumber($key, $newArray, $num) {

    if (($key = array_search($num, $newArray)) !== false){
        unset($newArray[$key]);
        var_dump($newArray);  
    };
     
}