<?php

namespace Decorator;

use Decorator\BlockDecorator\EmailDecorator;
use Decorator\BlockDecorator\SmsDecorator;
use Decorator\BlockDecorator\ChromeNotificationDecorator;
use Decorator\Repository\UserRepository;

spl_autoload_register(function ($className) {
    $className = str_replace("\\", DIRECTORY_SEPARATOR, $className);
    $className = preg_replace('/^Decorator/', '', $className);
    require_once __DIR__ . DIRECTORY_SEPARATOR . $className . '.php';
});

/*$userNotifiable = new UserRepository(); 
$userNotifiable->NotNotification();*/


/*$emailNotifiable = new EmailDecorator(new UserRepository());
echo $emailNotifiable->sendNotification();*/


/*$smsNotifiable = new SmsDecorator(new EmailDecorator(new UserRepository()));
echo $smsNotifiable->sendNotification();*/

$chromeNotification = new ChromeNotificationDecorator(new SmsDecorator(new EmailDecorator(new UserRepository())));
echo $chromeNotification->sendNotification();

