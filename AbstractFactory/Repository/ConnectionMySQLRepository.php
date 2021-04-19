<?php

namespace AbstractFactory\Repository;

use AbstractFactory\Db\MySQL;

abstract class ConnectionMySQLRepository {

    private $mysqlConnection;

    public function __construct(MySQL $mysqlConnection)
    {
       $this->mysqlConnection = $mysqlConnection;
    }

    public function getMysqlConnection(): MySQL {

        return $this->mysqlConnection;
    }
} 