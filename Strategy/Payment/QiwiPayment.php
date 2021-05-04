<?php

namespace Strategy\Payment;

use Strategy\Contract\InterfacePayment;

class QiwiPayment implements InterfacePayment {

    public function pay($sum, $phone) {

        echo "Проведём оплату через систему Qiwi";
        echo "<br>";
    }
}