<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reminder extends Model {
    public $timestamps = false;

    public $fillable = ['user_id', 'agent_id', 'text', 'datetime', 'done'];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function agent() {
        return $this->belongsTo(User::class);
    }
}
