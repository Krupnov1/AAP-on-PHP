<?php

namespace Adapter;

use Adapter\Contract\CircleInterface;
use Adapter\Contract\SquareInterface;
use Adapter\LibraryAdapter\CircleAdapter;
use Adapter\LibraryAdapter\SquareAdapter;
use Adapter\Library\CircleAreaLib;
use Adapter\Library\SquareAreaLib;


spl_autoload_register(function ($className) {
    $className = str_replace("\\", DIRECTORY_SEPARATOR, $className);
    $className = preg_replace('/^Adapter/', '', $className);
    require_once __DIR__ . $className . '.php';
});


function clientCode(CircleInterface $circleNotification, SquareInterface $squareNotification) {

    echo $circleNotification->circleArea(7);
    echo"<br>";
    echo"<br>";
    echo $squareNotification->squareArea(8);    
}

$circleArea = new CircleAreaLib();
$circleNotification = new CircleAdapter($circleArea, 7);

$squareArea = new SquareAreaLib();
$squareNotification = new SquareAdapter($squareArea, 8);

clientCode($circleNotification, $squareNotification);







