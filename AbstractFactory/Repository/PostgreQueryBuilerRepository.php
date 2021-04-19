<?php

namespace AbstractFactory\Repository;

use AbstractFactory\Contract\QueryBuilerRepositoryInterface;
use AbstractFactory\Entity\QueryBuiler;

class PostgreQueryBuilerRepository extends ConnectionPostgresRepository 
      implements QueryBuilerRepositoryInterface
{
    public function insert(QueryBuiler $queryBuiler) {

        echo 'Формируем запрос insert для базы Postgre.' . PHP_EOL; 
    }

    public function create(QueryBuiler $queryBuiler) {

        echo 'Формируем запрос create для базы Postgre.' . PHP_EOL; 
    }

    public function update(QueryBuiler $queryBuiler) {

        echo 'Формируем запрос update для базы Postgre.' . PHP_EOL; 
    }

    public function delete(QueryBuiler $queryBuiler) {

        echo 'Формируем запрос delete для базы Postgre.' . PHP_EOL;  
    }
}

