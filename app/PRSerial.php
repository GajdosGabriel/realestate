<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PRSerial extends Model {
    public $table = 'pr_serials';

    public $timestamps = false;

    public $fillable = ['pr_id', 'series', 'number'];

    public function pr() {
        return $this->belongsTo(OrderPR::class, 'pr_id');
    }
}
