<?php

namespace AbstractFactory\Repository;

use AbstractFactory\Contract\RecrordRepositoryInterface;
use AbstractFactory\Entity\Recrord;

class PostgreRecrordRepository extends ConnectionPostgresRepository 
      implements RecrordRepositoryInterface
{

    public function add(Recrord $recrord) {

        echo 'Добавляем запись в таблицу базы Postgre.' . PHP_EOL; 
    }

    public function update(Recrord $recrord) {

        echo 'Вносим изменения в таблицу базы Postgre.' . PHP_EOL; 
    }

    public function delete(Recrord $recrord) {

        echo 'Удаляем запись из таблицы базы Postgre.' . PHP_EOL;  
    }
}