<?php

//1. Написать аналог «Проводника» в Windows для директорий на сервере при помощи итераторов.

$OpenServer = [

    ["domains", ["123", "index.html", "localhost", "shop", "task", "test", "view"]],

    ["modules", ["conemu", "cron", "database", "dns", "ftp", "heidisql", "http", 
                "memcached", "php", "redis", "sendmail", "system", "wget"
                ]],

    "Open Server.exe",

    ["userdata", ["Bind-9.16", "composer", "config", "iconcache", "init.ini", "logs",
                 "MariaDB-10.1", "MariaDB-10.2", "MariaDB-10.3", "MariaDB-10.4", "MariaDB-5.5",
                 "MySQL-5.1", "MySQL-5.5", "MySQL-5.6", "MySQL-5.7", "MySQL-8.0", "php_upload",
                 "profiles", "Redis-2.8", "Redis-3.0", "Redis-3.2", "Redis-4.0", "Redis-5.0-dev",
                 "ssid.txt", "temp"
                ]],
];

$iter = new RecursiveArrayIterator($OpenServer);

$recursiveIterator = new RecursiveIteratorIterator($iter);

while ($recursiveIterator->valid()) {
    echo $recursiveIterator->key() . '" ' . $recursiveIterator->current() . "<br>";
    $recursiveIterator->next();
}
echo "<br>";  

//2. Определить сложность следующих алгоритмов:

//Поиск элемента массива с известным индексом: //O(1); 

$array = [1,2,3,4,5];                      
echo $array[3];
echo "<br>";                 

//Дублирование массива через foreach: //O(N) 
foreach ($array as $value) {
    echo $value;                      
}
echo "<br>";


//Рекурсивная функция нахождения факториала числа: O(N)

function fact($n) {
    if ($n <= 0) 
    return 1;
    return $n * fact($n - 1);
}
echo fact(5);


//3. Определить сложность следующих алгоритмов. Сколько произойдет итераций?

$n = 100;
$array[]= [];
for ($i = 0; $i < $n; $i++) {          // O(N) - 100 итераций     
    for ($j = 1; $j < $n; $j *= 2) {   // O(log(N)) - 700 итераций                
                                       // 800 итераций                 O(N*log(N))     
        $array[$i][$j]= true;
    }; 
};


$n = 100;
$array[] = [];
for ($i = 0; $i < $n; $i += 2) {       // O(N) - 50 итераций         
    for ($j = $i; $j < $n; $j++) {     // O(N) - 2550 итераций
                                       // 2600 итераций                  O(2^n)
        $array[$i][$j]= true;       
    }; 
};


//4. Простые делители числа 13195 — 5, 7, 13 и 29. Каков самый большой делитель числа 600851475143, являющийся простым числом?


function findNumber($a) {
    for ($i = 2; $i < $a; $i++) {
        if ($a % $i == 0) {
            $a = $a / $i;
            echo $i, "<br>";
        }
    }
    return $a;
}
echo findNumber(600851475143);     // 6857