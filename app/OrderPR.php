<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OrderPR extends Model {
    use SoftDeletes;
    public $table = 'order_pr';

    public $timestamps = false;

    public $fillable = ['number', 'duration'];

    // Accessors
    public function getPercentAttribute() {
        if ($this->duration == 2) return 10;
        elseif ($this->duration == 3) return 11;
        else return 12;
    }

    public function getTotalInvestmentAttribute() {
        return $this->number * 5000;
    }

    public function getTotalInterestAttribute() {
        return ($this->total_investment * ($this->percent / 100)) * $this->duration;
    }

    public function getInterestAttribute() {
        return ($this->total_investment * ($this->percent / 100)) / 4;
    }

    public function getSerialNumbersAttribute() {
        $str = '';
        foreach($this->serials as $objSerial) {
            $str .= $objSerial->series . $objSerial->number . ', ';
        }

        return rtrim($str, ', ');
    }

    // Relations
    public function order() {
        return $this->belongsTo(Order::class);
    }

    public function serials() {
        return $this->hasMany(PRSerial::class, 'pr_id');
    }

    public function nextPayment() {
        $arrPayments = $this->calendar();

        foreach ($arrPayments as $payment) {
            if (date('Y-m-d 00:00:00', time()) < $payment['date']) return $payment;
        }

        return 0;
    }

    // MAGIC O.o
    public function calendar() {
        $arrCalendar = [];
        $intPayment = 5000 * $this->number * ($this->percent / 100) / 4;
        $dttStartDate = strtotime($this->order->created_at);
        $dttEndDate = strtotime('+' . $this->duration . ' years', $dttStartDate);
        $dttPreviousPaydate = $this->previous_paydate($this->order->created_at);
        $dttFirstPaydate = $this->first_paydate($this->order->created_at);
        $wholeDiff = date_diff(date_create($dttPreviousPaydate), date_create($dttFirstPaydate))->format('%a');

        // Add first paydate to array
        $d1 = date_create(date('Y-m-d 00:00:00', $dttStartDate));
        $d2 = date_create($dttFirstPaydate);
        $intStartDays = date_diff($d1, $d2)->format('%a');
        $firstPayment = $intPayment / $wholeDiff * $intStartDays;
        $arrCalendar[] = [
            'date' => $dttFirstPaydate,
            'amount' => number_format($firstPayment, 2, ',', ' ')
        ];

        // Add middle paydates to array
        $date = $dttFirstPaydate;
        for ($i = 1; $i < $this->duration * 4; $i++) {
            $date = date('Y-m-d 00:00:00', strtotime('+3 months', strtotime($date)));

            $arrCalendar[] = [
                'date' => $date,
                'amount' => number_format($intPayment, 2, ',', ' ')
            ];
        }

        // Add last paydate to array
        if ($intPayment - $firstPayment == 0) {
            $arrCalendar[sizeof($arrCalendar) - 1]['amount'] = number_format(floatval($arrCalendar[sizeof($arrCalendar) - 1]['amount']) + $this->number * 5000, 2, ',', ' ');
        }
        else {
            $arrCalendar[] = [
                'date' => date('Y-m-d 00:00:00', $dttEndDate),
                'amount' => number_format(($intPayment - $firstPayment) + $this->number * 5000, 2, ',', ' ')
            ];
        }

        return $arrCalendar;
    }

    private function first_paydate($date) {
        $found = false;
        $day = strtotime($date);
        while ($found == false) {
            $day = strtotime('+1 day', $day);
            if (in_array(date('m-d', $day), ['01-01', '04-01', '07-01', '10-01'])) {
                $found = true;
                return date('Y-m-d 00:00:00', $day);
            }
        }
    }

    private function previous_paydate($date) {
        $found = false;
        $day = strtotime($date);
        while ($found == false) {
            if (in_array(date('m-d', $day), ['01-01', '04-01', '07-01', '10-01'])) {
                $found = true;
                return date('Y-m-d 00:00:00', $day);
            }
            $day = strtotime('-1 day', $day);
        }
    }
}
