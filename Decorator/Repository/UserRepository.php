<?php

namespace Decorator\Repository;


use Decorator\Contract\NotifiableInterface;


class UserRepository implements NotifiableInterface {

    public function sendNotification() {}

    public function NotNotification() {

        echo "Сообщения Вам отправляться не будут!!! ";
        echo"<br>";
        echo"<br>";
    }
}