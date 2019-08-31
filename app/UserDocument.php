<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserDocument extends Model {
    public $timestamps = false;

    public $fillable = ['user_id', 'document_id', 'filename', 'confirmed', 'created_at'];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function document() {
        return $this->belongsTo(Document::class);
    }
}
