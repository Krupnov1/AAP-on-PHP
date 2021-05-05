<?php

namespace Strategy\Payment;

use Strategy\Contract\InterfacePayment;

class WebMoneyPayment implements InterfacePayment {

    public function pay($sum, $phone) {

        echo "Проведём оплату через систему WebMoney";
        echo "<br>";
    }
}