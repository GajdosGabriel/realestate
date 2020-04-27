<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;
use Exception;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserActivity extends Model {
    use SoftDeletes;

    public $table = 'user_activities';

    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'activity_id'
    ];

    public static function logActivity($intActivityID) {
        if (! Auth::user()->hasAnyRole(['admin', 'agent']) ) {
            UserActivity::create([
                'user_id' => Auth::user()->id,
                'activity_id' => $intActivityID
            ]);
        }
    }

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function activity() {
        return $this->belongsTo(Activity::class);
    }


}
