<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lead extends Model {
    public $timestamps = false;

    public $fillable = ['list', 'name', 'surname', 'email', 'country', 'phone_code', 'phone', 'priority'];

    // Scopes
    public function scopeSearch($query, $search) {
        $query->where('name', 'like', '%' . $search . '%')
            ->orWhere('surname', 'like', '%' . $search . '%')
            ->orWhere('phone', 'like', '%' . $search . '%')
            ->orWhere('id', 'like', '%' . $search . '%')
            ->orWhere('email', 'like', '%' . $search . '%');
    }
}
