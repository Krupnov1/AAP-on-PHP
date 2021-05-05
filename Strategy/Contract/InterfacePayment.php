<?php

namespace Strategy\Contract;

interface InterfacePayment {

    public function pay($sum, $phone);
    
}