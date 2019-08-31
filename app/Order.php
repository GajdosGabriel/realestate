<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model {
    use SoftDeletes;
    public $timestamps = false;

    public $fillable = ['user_id', 'name', 'surname', 'street', 'zip', 'city', 'region', 'country', 'nationality', 'email', 'government_id', 'phone_code', 'phone', 'created_at', 'contract', 'deleted_at'];

    // Relations
    public function user() {
        return $this->belongsTo(User::class);
    }

    public function joint() {
        return $this->hasOne(OrderJoint::class);
    }

    public function company() {
        return $this->hasOne(OrderCompany::class);
    }

    public function pr() {
        return $this->hasOne(OrderPR::class);
    }

    public function tdo() {
        return $this->hasOne(OrderTDO::class);
    }

    public function sp() {
        return $this->hasOne(OrderSP::class);
    }
}
