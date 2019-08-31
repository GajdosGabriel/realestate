<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use App\Order;
use App\Classes\Contracts\TDOAnnex1;
use App\Classes\Contracts\TDOAnnex2;

class OrderController extends Controller {
    public function order($id) {
        $objOrder = Order::orderBy('id', 'desc')
            ->with(['user', 'company', 'joint', 'tdo.project', 'sp.project', 'pr.serials'])
            ->findOrFail($id);

        if ($objOrder->tdo) $strType = 'tdo';
        elseif ($objOrder->sp) $strType = 'sp';
        else $strType = 'pr';

        return view('member/orders/order_' . $strType)->with([
            'objOrder' => $objOrder
        ]);
    }

    public function annex($id, $number) {
        $objOrder = Order::with(['company', 'tdo.project', 'sp.project'])->findOrFail($id);

        if ($number == 1) $objContract = new TDOAnnex1($objOrder);
        elseif ($number == 2) $objContract = new TDOAnnex2($objOrder);

        return $objContract->output(true);
    }
}
