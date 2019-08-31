<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class REBSerial extends Model {
    public $table = 'reb_serials';

    public $timestamps = false;

    public $fillable = ['reb_id', 'bond', 'series', 'number'];

    public function reb() {
        return $this->belongsTo('App\OrderREB', 'reb_id');
    }
}
