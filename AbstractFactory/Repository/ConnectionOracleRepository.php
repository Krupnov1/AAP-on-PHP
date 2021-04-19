<?php

namespace AbstractFactory\Repository;

use AbstractFactory\Db\Oracle;

abstract class ConnectionOracleRepository {

    private $oracleConnection;

    public function __construct(Oracle $oracleConnection)
    {
       $this->oracleConnection = $oracleConnection;
    }

    public function getOracleConnection(): Oracle {

        return $this->oracleConnection;
    }
}