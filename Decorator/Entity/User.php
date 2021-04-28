<?php

namespace Decorator\Entity;

class User { 

    private $phone;

    private $email;

    private $chromeNotification;

    public function __construct(string $phone, string $email, string $chromeNotification)
    {
        $this->phone = $phone;
        $this->email = $email;
        $this->chromeNotification = $chromeNotification;
    }
}









