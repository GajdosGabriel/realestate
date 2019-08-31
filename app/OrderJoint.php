<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderJoint extends Model {
    public $table = 'order_joint_details';

    public $timestamps = false;

    public $fillable = ['name', 'government_id'];

    public function order() {
        return $this->belongsTo(Order::class);
    }
}
