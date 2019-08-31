<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DeletedUser extends Model {
    public $timestamps = false;

    public $fillable = ['id', 'name', 'surname', 'email', 'phone_code', 'phone', 'country'];
}
