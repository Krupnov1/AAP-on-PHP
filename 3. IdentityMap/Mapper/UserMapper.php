<?php

namespace IdentityMap\Mapper;

use IdentityMap\Contract\StorageInterface;
use IdentityMap\Entity\User;

class UserMapper {

    private $storageAdapter;

    public function __construct(StorageInterface $storage) {
        
        $this->storageAdapter = $storage;
    }

    public function findUserById($id) {

        $result = $this->storageAdapter->find($id);

        if ($result === null) {
            return null;
        }
        return $this->mapRowToProduct($result);
    }

    private function mapRowToProduct($row) {

        return new User($row['id'], $row['name'], $row['login'], $row['password'], $row['role']);
    }
}