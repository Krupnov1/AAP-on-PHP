<?php

namespace Adapter\LibraryAdapter;

use Adapter\Contract\SquareInterface;
use Adapter\Library\SquareAreaLib;

class SquareAdapter implements SquareInterface {

    private $adapterObject;

    private $diagonal;

    public function __construct(SquareAreaLib $adapterObject, $diagonal) {
        
        $this->adapterObject = $adapterObject;
        $this->diagonal = $diagonal;
    }

    public function squareArea(int $sideSquare) {

        return $this->adapterObject->getSquareArea($this->diagonal);        
    }
}