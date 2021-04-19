<?php

namespace AbstractFactory\Contract;

use AbstractFactory\Entity\QueryBuiler;

interface QueryBuilerRepositoryInterface {

    public function insert(QueryBuiler $queryBuiler);

    public function create(QueryBuiler $queryBuiler);

    public function update(QueryBuiler $queryBuiler);

    public function delete(QueryBuiler $queryBuiler);
}