<?php

namespace IdentityMap\Storage;

use IdentityMap\Contract\StorageInterface;

class StorageUserAdapter implements StorageInterface {

    public function find(int $id): ?array {

        switch ($id) {
            case 1:
                return [
                    'id' => 1,
                    'name' => 'Super Admin',
                    'login' => 'root',
                    'password' => '$2y$10$GnZbayyccTIDIT5nceez7u7z1u6K.znlEf9Jb19CLGK0NGbaorw8W', // 1234
                ];
            break;
            case 2:
                return [
                    'id' => 2,
                    'name' => 'Doe John',
                    'login' => 'doejohn',
                    'password' => '$2y$10$j4DX.lEvkVLVt6PoAXr6VuomG3YfnssrW0GA8808Dy5ydwND/n8DW', // qwerty
                ];
            break;
            case 3:
                return [
                    'id' => 3,
                    'name' => 'Ivanov Ivan Ivanovich',
                    'login' => 'i**extends',
                    'password' => '$2y$10$TcQdU.qWG0s7XGeIqnhquOH/v3r2KKbes8bLIL6NFWpqfFn.cwWha', // PaSsWoRd
                ];
            break;
            case 4:
                return [
                    'id' => 4,
                    'name' => 'Test Testov Testovich',
                    'login' => 'testok',
                    'password' => '$2y$10$vQvuFc6vQQyon0IawbmUN.3cPBXmuaZYsVww5csFRLvLCLPTiYwMa', // testss
                ];
            break;
        }
        return null;
    }
}