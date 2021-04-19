<?php

namespace AbstractFactory;

use AbstractFactory\Factory\MySqlRepositoryFactory;
use AbstractFactory\Factory\PostgreRepositoryFactory;
use AbstractFactory\Factory\OracleRepositoryFactory;
use AbstractFactory\Db\MySQL;
use AbstractFactory\Db\PostgreSQL;
use AbstractFactory\Db\Oracle;
use AbstractFactory\Service\Service;

spl_autoload_register(function ($className) {
    $className = str_replace("\\", DIRECTORY_SEPARATOR, $className);
    $className = preg_replace('/^AbstractFactory/', '', $className);
    require_once __DIR__ . DIRECTORY_SEPARATOR . $className . '.php';
});

$mySqlRepositoryFactory = new MySqlRepositoryFactory(new MySQL());
$serviceWithMySqlRepositories = new Service($mySqlRepositoryFactory);
$serviceWithMySqlRepositories->addRecrord();
$serviceWithMySqlRepositories->addQueryBuiler();


/*$postgreRepositoryFactory = new PostgreRepositoryFactory(new PostgreSQL());
$serviceWithPostgreRepositories = new Service($postgreRepositoryFactory);
$serviceWithPostgreRepositories->addRecrord();
$serviceWithPostgreRepositories->addQueryBuiler();*/



/*$oracleRepositoryFactory = new OracleRepositoryFactory(new Oracle());
$serviceWithOracleRepositories = new Service($oracleRepositoryFactory);
$serviceWithOracleRepositories->addRecrord();
$serviceWithOracleRepositories->addQueryBuiler();*/

