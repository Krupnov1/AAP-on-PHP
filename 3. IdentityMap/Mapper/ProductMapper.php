<?php

namespace IdentityMap\Mapper;

use IdentityMap\Contract\StorageInterface;
use IdentityMap\Entity\Product;

class ProductMapper {

    private $storageAdapter;

    public function __construct(StorageInterface $storage) {
        
        $this->storageAdapter = $storage;
    }

    public function findProductById($id) {

        $result = $this->storageAdapter->find($id);

        if ($result === null) {
            return null;
        }
        return $this->mapRowToProduct($result);
    }

    private function mapRowToProduct($row) {

        return new Product($row['id'], $row['name'], $row['price']);
    }
}