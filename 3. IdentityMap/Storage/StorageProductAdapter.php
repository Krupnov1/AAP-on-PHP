<?php

namespace IdentityMap\Storage;

use IdentityMap\Contract\StorageInterface;

class StorageProductAdapter implements StorageInterface {

    public function find(int $id): ?array {

        switch ($id) {
            case 1:
                return [
                    'id' => 1,
                    'name' => 'PHP',
                    'price' => 15300,
                ];
            break;
            case 2:
                return [
                    'id' => 2,
                    'name' => 'Python',
                    'price' => 20400,
                ];
            break;
            case 3:
                return [
                    'id' => 3,
                    'name' => 'C#',
                    'price' => 30100,
                ];
            break;
            case 4:
                return [
                    'id' => 4,
                    'name' => 'Java',
                    'price' => 30600,
                ];
            break;
            case 5:
                return [
                    'id' => 5,
                    'name' => 'Ruby',
                    'price' => 18600,
                ];
            break;
            case 6:
                return [
                    'id' => 6,
                    'name' => 'Delphi',
                    'price' => 8400,
                ];
            break;
            case 7:
                return [
                    'id' => 7,
                    'name' => 'C++',
                    'price' => 19300,
                ];
            break;
            case 8:
                return [
                    'id' => 8,
                    'name' => 'C',
                    'price' => 12800,
                ];
            break;
            case 9:
                return [
                    'id' => 9,
                    'name' => 'Lua',
                    'price' => 5000,
                ];
            break;
        }
        return null;
    }
}