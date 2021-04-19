<?php

namespace AbstractFactory\Repository;

use AbstractFactory\Db\PostgreSQL;

abstract class ConnectionPostgresRepository {

    private $postgreConnection;

    public function __construct(PostgreSQL $postgreConnection)
    {
       $this->postgreConnection = $postgreConnection;
    }

    public function getOracleConnection(): PostgreSQL {

        return $this->postgreConnection;
    }
}