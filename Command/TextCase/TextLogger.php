<?php

namespace Command\TextCase;

use Command\Contract\CommandInterface;
use Command\Contract\IText;

class TextLogger implements CommandInterface {

    private $logger;

    public function __construct(CommandInterface $logger) {

        $this->logger = $logger;
    }

    public function execute() {

        echo "Запускаем процесс редактирования текста: ";
        

        $this->logger->execute();  
    }

    public function refund() {

        echo "Отменим выполненную команду";
        echo "<br>";
    }
}