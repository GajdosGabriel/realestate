<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model {
    public function user_documents() {
        return $this->hasMany(UserDocument::class);
    }
}
