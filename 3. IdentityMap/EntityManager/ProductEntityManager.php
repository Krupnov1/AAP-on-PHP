<?php

namespace IdentityMap\EntityManager;

use IdentityMap\Contract\DomainObjectInterface;
use IdentityMap\IdentityMaps\IdentityMap; 
use IdentityMap\Mapper\ProductMapper;

class ProductEntityManager {

    private $identityMap;

    private $productMapper;

    public function __construct(IdentityMap $identityMap, ProductMapper $productMapper) { 

        $this->identityMap = $identityMap;
        $this-> productMapper = $productMapper;
    }

    public function findById($class, $id) {

        $entity = $this->identityMap->find($class, $id);
        
        if ($entity !== null) {
            return $entity;
        }

        $entity = $this->productMapper->findProductById($id);

        if ($entity === null) {
            return null;
        }

        $this->identityMap->add($entity);
        return $entity;
    }
}
