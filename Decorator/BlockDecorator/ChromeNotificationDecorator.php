<?php

namespace Decorator\BlockDecorator;

use Decorator\Contract\NotifiableInterface;

class ChromeNotificationDecorator extends NotifiableDecorator {

    public function __construct(NotifiableInterface $notifiable) {

    parent:: __construct($notifiable);  
    }
    
    private function sendChromeNotification() {

        echo "Сообщения Вам будут отправляться в Chrome Notification!!! \n";
        echo"<br>"; 
        echo"<br>";
    }

    public function sendNotification() {
        $this->notifiable->sendNotification(); 
        $this->sendChromeNotification();       
    }
}