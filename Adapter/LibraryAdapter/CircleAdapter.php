<?php

namespace Adapter\LibraryAdapter;

use Adapter\Contract\CircleInterface;
use Adapter\Library\CircleAreaLib;

class CircleAdapter implements CircleInterface {

    private $adapterObject;

    private $diagonal;

    public function __construct(CircleAreaLib $adapterObject, $diagonal) {
        
        $this->adapterObject = $adapterObject;
        $this->diagonal = $diagonal;
    }

    public function circleArea(int $circumference) {

        return $this->adapterObject->getCircleArea($this->diagonal);        
    }
}