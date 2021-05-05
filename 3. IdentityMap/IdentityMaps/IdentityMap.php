<?php

namespace IdentityMap\IdentityMaps;

use IdentityMap\Contract\DomainObjectInterface;

class IdentityMap {

    private $identityMap = [];

    public function add(DomainObjectInterface $obj) {

        $key = $this->getGlobalKey(get_class($obj), $obj->getId());  
        $this->identityMap[$key] = $obj;
    }

    public function find($classname, $id) {

        $key = $this->getGlobalKey($classname, $id);
        
        if (isset($this->identityMap[$key])) {
            return $this->identityMap[$key];
        }
        return null;
    }

    private function getGlobalKey($classname, $id) {

        return sprintf('%s.%d', $classname, $id);
    }
}