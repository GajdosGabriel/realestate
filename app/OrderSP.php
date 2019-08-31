<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OrderSP extends Model {
    use SoftDeletes;
    public $table = 'order_sp';

    public $fillable = ['order_id', 'project_id', 'shares', 'per_share', 'deleted_at'];

    // Accessors
    public function getInvestmentAttribute() {
        return $this->shares * $this->per_share;
    }

    public function setPerShareAttribute($value)
    {
        $this->attributes['per_share'] = 150000;
    }

    // Relations
    public function order() {
        return $this->belongsTo(Order::class);
    }

    public function project() {
        return $this->belongsTo(Project::class);
    }

}