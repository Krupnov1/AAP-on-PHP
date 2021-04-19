<?php

namespace AbstractFactory\Factory;

use AbstractFactory\Contract\RepositoryFactoryInterface;
use AbstractFactory\Contract\RecrordRepositoryInterface;
use AbstractFactory\Contract\QueryBuilerRepositoryInterface;
use AbstractFactory\Repository\PostgreRecrordRepository;
use AbstractFactory\Repository\PostgreQueryBuilerRepository;
use AbstractFactory\Db\PostgreSQL;

class PostgreRepositoryFactory implements RepositoryFactoryInterface
{
    private $postgreConnection;

    public function __construct(PostgreSQL $postgreConnection) {

        $this->postgreConnection = $postgreConnection;
    }

    public function createRecrordRepository(): RecrordRepositoryInterface {

        return new PostgreRecrordRepository($this->postgreConnection);
    }

    public function createQueryBuilerRepository(): QueryBuilerRepositoryInterface {

        return new PostgreQueryBuilerRepository($this->postgreConnection);
    }
} 