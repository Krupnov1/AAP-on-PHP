<?php

namespace Strategy\Entity;

class Order {

    private $id;

    private $price;

    
    public function __construct($id, $price) {

        $this->id = $id;
        $this->price = $price;  
    }

    public function getId() {

        return $this->id;
    }

    public function getPrice() {

        return $this->price;
    }
}

