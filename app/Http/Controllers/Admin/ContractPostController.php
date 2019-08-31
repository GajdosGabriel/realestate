<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Classes\Contracts\TDOContract;
use App\Classes\Contracts\PRContract;
use App\Order;
use App\OrderPR;
use App\OrderTDO;
use App\Project;

class ContractPostController extends Controller {
    public function show(Request $objRequest) {
        $objOrder = new Order();
        $objOrder->name = 'Test';
        $objOrder->surname = 'Test';
        $objOrder->created_at = date('Y-m-d H:i:s');

        if ($objRequest->type == 'tdo') {
            $objOrder->tdo = new OrderTDO();
            $objOrder->tdo->project = new Project();
            $objContract = new TDOContract($objOrder);
        }
        else {
            $objOrder->pr = new OrderPR();
            $objOrder->pr->duration = 2;
            $objContract = new PRContract($objOrder);
        }


        return $objContract->output(true);
    }
}