<?php

namespace AbstractFactory\Factory;

use AbstractFactory\Contract\RepositoryFactoryInterface;
use AbstractFactory\Contract\RecrordRepositoryInterface;
use AbstractFactory\Contract\QueryBuilerRepositoryInterface;
use AbstractFactory\Repository\OracleRecrordRepository;
use AbstractFactory\Repository\OracleQueryBuilerRepository;
use AbstractFactory\Db\Oracle;

class OracleRepositoryFactory implements RepositoryFactoryInterface
{
    private $oracleConnection;

    public function __construct(Oracle $oracleConnection) {

        $this->oracleConnection = $oracleConnection;
    }

    public function createRecrordRepository(): RecrordRepositoryInterface {

        return new OracleRecrordRepository($this->oracleConnection);
    }

    public function createQueryBuilerRepository(): QueryBuilerRepositoryInterface {

        return new OracleQueryBuilerRepository($this->oracleConnection);
    }
} 