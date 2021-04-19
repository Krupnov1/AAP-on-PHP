<?php

namespace AbstractFactory\Repository;

use AbstractFactory\Contract\QueryBuilerRepositoryInterface;
use AbstractFactory\Entity\QueryBuiler;

class OracleQueryBuilerRepository extends ConnectionOracleRepository 
      implements QueryBuilerRepositoryInterface
{
    public function insert(QueryBuiler $queryBuiler) {

        echo 'Формируем запрос insert для базы Oracle.' . PHP_EOL; 
    }

    public function create(QueryBuiler $queryBuiler) {

        echo 'Формируем запрос create для базы Oracle.' . PHP_EOL; 
    }

    public function update(QueryBuiler $queryBuiler) {

        echo 'Формируем запрос update для базы Oracle.' . PHP_EOL; 
    }

    public function delete(QueryBuiler $queryBuiler) {

        echo 'Формируем запрос delete для базы Oracle.' . PHP_EOL;  
    }
}

