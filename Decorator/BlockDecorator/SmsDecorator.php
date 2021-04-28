<?php

namespace Decorator\BlockDecorator;

use Decorator\Contract\NotifiableInterface;

class SmsDecorator extends NotifiableDecorator {

    public function __construct(NotifiableInterface $notifiable) {

    parent:: __construct($notifiable);  
    }
    
    private function sendSms() {

        echo "Сообщения Вам будут отправляться в виде SMS!!! \n";
        echo"<br>"; 
        echo"<br>";
    }

    public function sendNotification() {
        $this->notifiable->sendNotification(); 
        $this->sendSms();       
    }
}