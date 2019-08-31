<?php

namespace App\Classes\Contracts;

use App\Order;

class PRContract extends Contract {
    public function __construct(Order $objOrder) {
        parent::__construct($objOrder, 'pr');
    }
}