<?php

namespace Strategy\Payment;

use Strategy\Contract\InterfacePayment;

class YandexPayment implements InterfacePayment {

    public function pay($sum, $phone) {

        echo "Проведём оплату через систему Yandex";
        echo "<br>";
    }
}