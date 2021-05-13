<?php

function compare($n) {

    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0) {
            return false;
            break;
        }
    }
    return true;
}

function find($n) {

    $c = 0;
    $a = 2;
    while ($c < $n) {
        if (compare($a)) {
            $c++;
        }
        $a++;
    }
    return $a - 1;
}

$number = find(10001);

echo $number; // 104743