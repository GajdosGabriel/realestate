<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pep extends Model {
    protected $table = 'pep';

    protected $fillable = ['user_id', 'is_pep', 'type', 'sanctioned', 'end_user', 'government_sector', 'government_sector_type', 'sectors', 'sector_type', 'businessman', 'investment'];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
