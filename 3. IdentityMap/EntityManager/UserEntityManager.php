<?php

namespace IdentityMap\EntityManager;

use IdentityMap\Contract\DomainObjectInterface;
use IdentityMap\IdentityMaps\IdentityMap; 
use IdentityMap\Mapper\UserMapper;

class UserEntityManager {

    private $identityMap;

    private $userMapper;

    public function __construct(IdentityMap $identityMap, UserMapper $userMapper) { 

        $this->identityMap = $identityMap;
        $this->userMapper = $userMapper;
    }

    public function findById($class, $id) {

        $entity = $this->identityMap->find($class, $id);
        
        if ($entity !== null) {
            return $entity;
        }

        $entity = $this->userMapper->findUserById($id);

        if ($entity === null) {
            return null;
        }

        $this->identityMap->add($entity);
        return $entity;
    }
}
