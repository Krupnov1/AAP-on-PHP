<?php

namespace Command;

use Command\Entity\Text;
use Command\Commands\CopyText;
use Command\Commands\Cut;
use Command\Commands\Insert;
use Command\TextCase\TextLogger;
use Command\TextCase\TextControl;

spl_autoload_register(function ($className) {
    $className = str_replace("\\", DIRECTORY_SEPARATOR, $className);
    $className = preg_replace('/^Command/', '', $className);
    require_once __DIR__ . $className . '.php';
});

$text = new Text();
$textFrom = $text->selectTextFrom();
$textBefore = $text->selectTextBefore();

$loggerText = new TextLogger(new CopyText($text, $textFrom, $textBefore)); //new CopyText; new Cut; new Insert
$loggerText->execute();
$loggerText->refund();
