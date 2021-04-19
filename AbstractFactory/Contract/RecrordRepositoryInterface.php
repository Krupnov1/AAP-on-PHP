<?php

namespace AbstractFactory\Contract;

use AbstractFactory\Entity\Recrord;

interface RecrordRepositoryInterface {

    public function add(Recrord $recrord);

    public function update(Recrord $recrord);

    public function delete(Recrord $recrord); 
}