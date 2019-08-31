<?php

namespace App\Classes\Contracts;

use App\Order;

class TDO2Contract extends Contract {
    public function __construct(Order $objOrder) {
        parent::__construct($objOrder, 'tdo2');
    }
}