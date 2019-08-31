<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model {
    public $timestamps = false;

    public $fillable = ['user_id', 'author_id', 'text', 'note'];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function author() {
        return $this->belongsTo(User::class);
    }
}
