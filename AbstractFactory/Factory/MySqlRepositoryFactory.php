<?php

namespace AbstractFactory\Factory;

use AbstractFactory\Contract\RepositoryFactoryInterface;
use AbstractFactory\Contract\RecrordRepositoryInterface;
use AbstractFactory\Contract\QueryBuilerRepositoryInterface;
use AbstractFactory\Repository\MySqlRecrordRepository;
use AbstractFactory\Repository\MySqlQueryBuilerRepository;
use AbstractFactory\Db\MySQL;

class MySqlRepositoryFactory implements RepositoryFactoryInterface
{
    private $mysqlConnection;

    public function __construct(MySQL $mysqlConnection) {

        $this->mysqlConnection = $mysqlConnection;
    }

    public function createRecrordRepository(): RecrordRepositoryInterface {

        return new MySqlRecrordRepository($this->mysqlConnection);
    }

    public function createQueryBuilerRepository(): QueryBuilerRepositoryInterface {

        return new MySqlQueryBuilerRepository($this->mysqlConnection);
    }
} 