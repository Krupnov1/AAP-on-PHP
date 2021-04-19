<?php

namespace AbstractFactory\Service;

use AbstractFactory\Contract\RepositoryFactoryInterface;
use AbstractFactory\Contract\RecrordRepositoryInterface;
use AbstractFactory\Contract\QueryBuilerRepositoryInterface;
use AbstractFactory\Entity\Recrord;
use AbstractFactory\Entity\QueryBuiler;


class Service {

    private $recrordRepository;

    private $queryBuilerRepository;

    public function __construct(RepositoryFactoryInterface $repositoryFactory)
    {
        $this->recrordRepository = $repositoryFactory->createRecrordRepository();
        $this->queryBuilerRepository = $repositoryFactory->createQueryBuilerRepository();
    }

    public function addRecrord(): void {
        $recrord = new Recrord();
        $this->recrordRepository->add($recrord);
    }

    public function addQueryBuiler(): void {
        $queryBuiler = new QueryBuiler();
        $this->queryBuilerRepository->insert($queryBuiler);
    }


}