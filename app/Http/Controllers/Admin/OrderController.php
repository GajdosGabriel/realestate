<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Order;
use Storage;
use App\User;

class OrderController extends Controller {
    public function index() {
        $arrOrders = Order::orderBy('id', 'DESC')
            ->with(['user', 'tdo.project', 'pr.serials'])
            ->paginate(50);

        return view('admin/orders/index')->with([
            'arrOrders' => $arrOrders
        ]);
    }

    public function order($id) {
        $objOrder = Order::orderBy('id', 'DESC')
            ->with(['user', 'company', 'joint', 'tdo.project', 'pr.serials'])
            ->findOrFail($id);

        return view('admin/orders/order')->with([
            'objOrder' => $objOrder
        ]);
    }


    // Soft deleting Order, only SP
    public function delete(Order $order) {
        if(isset($order->sp)) {
            $order->sp->delete();
            $order->delete();
            flash('Order was successfully deleted.')->success();
        } else {
            flash('You can delete only SP orders.')->error();
        }
        return redirect('admin');
    }

    public function download_contract($id) {
        $objOrder = Order::findOrFail($id);

        return Storage::disk('local')->download('public/users/' . $objOrder->user_id . '/contracts/' . $objOrder->contract);
    }

    public function payments() {
        $arrUsers = User::has('orders.pr')
            ->orderBy('surname', 'ASC')
            ->with(['bank_details', 'orders.pr'])
            ->get();

        $arrBankDetails = $arrUsers->pluck('bank_details');

        $arrOrders = Order::has('pr')->with('pr')->get();

        $arrPayments = $this->calculatePayments($arrOrders)->keyBy('user_id');

        return view('admin/orders/payments')->with([
            'arrUsers' => $arrUsers,
            'arrBankDetails' => $arrBankDetails,
            'arrPayments' => $arrPayments
        ]);
    }

    private function calculatePayments($arrOrders) {
        $arrPayments = [];

        foreach ($arrOrders as $objOrder) {
            $payment = $objOrder->pr->nextPayment();
            $arr2 = [
                'user_id' => $objOrder->user_id,
                'date' => $payment['date'],
                'amount' => $payment['amount']
            ];

            $arr[] = $arr2;
        }

        $arr = collect($arr)->groupBy('user_id');

        foreach ($arr as $key => $value) {
            $sum = 0;
            $date = $value[0]['date'];

            foreach ($value as $payment) {
                $val = str_replace(',', '.', $payment['amount']);
                $sum += (float) $val;
            }

            $arrPayments[] = [
                'user_id' => $key,
                'date' => $date,
                'amount' => $sum
            ];
        }

        return collect($arrPayments);
    }
}