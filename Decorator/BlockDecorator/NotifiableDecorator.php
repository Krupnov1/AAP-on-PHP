<?php

namespace Decorator\BlockDecorator;

use Decorator\Contract\NotifiableInterface;

abstract class NotifiableDecorator implements NotifiableInterface {

    protected $notifiable;
 
    public function __construct(NotifiableInterface $notifiable) {
        
        $this->notifiable = $notifiable;
    }

    public function sendNotification() {

        return $this->notifiable->sendNotification();
    } 
}