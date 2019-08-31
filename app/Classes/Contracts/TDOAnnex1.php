<?php

namespace App\Classes\Contracts;

use App\Order;

class TDOAnnex1 extends Contract {
    public function __construct(Order $objOrder) {
        parent::__construct($objOrder, 'tdo_annex1');
    }
}