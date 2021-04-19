<?php

namespace AbstractFactory\Contract;

interface RepositoryFactoryInterface {

    public function createRecrordRepository(): RecrordRepositoryInterface;
    
    public function createQueryBuilerRepository(): QueryBuilerRepositoryInterface;
}