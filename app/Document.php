<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Document extends Model {
    public $timestamps = false;

    public $fillable = ['name'];

    public function user_documents() {
        return $this->hasMany(UserDocument::class);
    }
}
