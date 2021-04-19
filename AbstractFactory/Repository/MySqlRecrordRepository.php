<?php

namespace AbstractFactory\Repository;

use AbstractFactory\Contract\RecrordRepositoryInterface;
use AbstractFactory\Entity\Recrord;

class MySqlRecrordRepository extends ConnectionMySQLRepository 
      implements RecrordRepositoryInterface
{

    public function add(Recrord $recrord) {

        echo 'Добавляем запись в таблицу базы MySQL.' . PHP_EOL; 
    }

    public function update(Recrord $recrord) {

        echo 'Вносим изменения в таблицу базы MySQL.' . PHP_EOL; 
    }

    public function delete(Recrord $recrord) {

        echo 'Удаляем запись из таблицы базы MySQL.' . PHP_EOL;  
    }
}