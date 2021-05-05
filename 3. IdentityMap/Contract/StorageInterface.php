<?php

namespace IdentityMap\Contract;

interface StorageInterface {

    public function find(int $id): ?array;
} 