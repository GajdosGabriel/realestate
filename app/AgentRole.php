<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AgentRole extends Model {
    public $timestamps = false;

    public $fillable = ['agent_id', 'role_id'];

    public function agent() {
        return $this->belongsTo(User::class, 'agent_id', 'id');
    }

    public function role() {
        return $this->belongsTo('Spatie\Permission\Models\Role');
    }
}
