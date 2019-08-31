<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderREB extends Model {
    public $table = 'order_reb';

    public $timestamps = false;

    public $fillable = ['number', 'duration'];

    public function percentage() {
        if ($this->duration == 2) return 8;
        elseif ($this->duration == 3.5) return 9.5;
        else return 11;
    }

    public function order() {
        return $this->belongsTo('App\Order');
    }

    public function serials() {
        return $this->hasMany('App\REBSerial', 'reb_id');
    }
}
