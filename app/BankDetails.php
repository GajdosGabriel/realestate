<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BankDetails extends Model {
    public $timestamps = false;

    public $fillable = ['user_id', 'iban', 'name', 'address', 'bank_name', 'bank_address', 'bic'];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
