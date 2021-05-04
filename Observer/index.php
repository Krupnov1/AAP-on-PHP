<?php

namespace Observer;

use Observer\Entity\Finder;
use Observer\Observers\addVacancyObserver;

spl_autoload_register(function ($className) {
    $className = str_replace("\\", DIRECTORY_SEPARATOR, $className);
    $className = preg_replace('/^Observer/', '', $className);
    require_once __DIR__ . $className . '.php';
});

$finder1 = new finder("Евгений", "qwer@ty", "3 года");
$finder2 = new finder("Владимир", "qvbr@ty", "2 года");
$finder3 = new finder("Александр", "lkjr@ty", "1 год");

$observer = new addVacancyObserver();

$finder1->attach($observer);
$finder2->attach($observer);
$finder3->attach($observer);

$finder1->addVacancy('Программист');
$finder2->addVacancy('Программист');
$finder3->addVacancy('Программист');