<?php

namespace Strategy\Service;

use Strategy\Contract\InterfacePayment;

class OrderPay {

    public function toPay(InterfacePayment $payment, $sum, $phone) {

        return $payment->pay($sum, $phone);
    }
}