<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderCompany extends Model {
    public $table = 'order_company_details';

    public $timestamps = false;

    public $fillable = ['name', 'id_number', 'street', 'zip', 'city', 'region', 'country'];

    public function order() {
        return $this->belongsTo(Order::class);
    }
}
