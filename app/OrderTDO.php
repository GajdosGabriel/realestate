<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderTDO extends Model {
    public $table = 'order_tdo';

    public $timestamps = false;

    public $fillable = ['order_id', 'project_id', 'shares', 'per_share'];

    // Accessors
    public function getInvestmentAttribute() {
        return $this->shares * 40000;
    }

    // Relations
    public function order() {
        return $this->belongsTo(Order::class);
    }

    public function project() {
        return $this->belongsTo(Project::class);
    }
}
