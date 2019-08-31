<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model {
    public $timestamps = false;

    public $fillable = ['text'];

    public function answer() {
        return $this->hasMany('App\Answer');
    }
}
