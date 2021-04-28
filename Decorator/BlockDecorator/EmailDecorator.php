<?php

namespace Decorator\BlockDecorator;

use Decorator\Contract\NotifiableInterface;

class EmailDecorator extends NotifiableDecorator {

    public function __construct(NotifiableInterface $notifiable) {

    parent:: __construct($notifiable);  
    }
    
    private function sendEmail() {

        echo "Сообщения Вам будут отправляться на Email!!! \n";
        echo"<br>"; 
        echo"<br>";
    }

    public function sendNotification() {
        $this->notifiable->sendNotification(); 
        $this->sendEmail();       
    }
}