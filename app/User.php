<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;
use Lab404\Impersonate\Models\Impersonate;
use App\Notifications\ResetPassword;

class User extends Authenticatable {
    use HasRoles, Notifiable, Impersonate;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'referral_id', 'name', 'surname', 'email', 'password', 'phone_code', 'phone', 'country', 'company', 'url', 'status', 'step', 'priority'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public static function generatePassword() {
        $characters = 'abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789';
        $charactersLength = strlen($characters);
        $randomString = '';

        for ($i = 0; $i < 8; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }

        return $randomString;
    }

    /**
     * Send the password reset notification.
     *
     * @param  string $token
     * @return void
     */
    public function sendPasswordResetNotification($token) {
        $this->notify(new ResetPassword($token));
    }

    // Accessors
    public function getStatusClassAttribute() {
        if($this->status == 1) return 'danger';
        elseif($this->status == 2) return 'warning';
        elseif($this->status == 3) return 'hot';
        elseif($this->status == 4) return 'success';
        elseif($this->status == 5) return 'blue';
        else return '';
    }

    // Scopes
    public function scopeOnline($query, array $excluded = null) {
        $query = $query->whereHas('session', function ($query) {
            $query->where('last_activity', '>', time() - 61);
        });

        if ($excluded) $query->whereNotIn('id', $excluded);

        return $query;
    }

    public function scopeSearch($query, $search) {
        return $query->where('name', 'like', '%' . $search . '%')
            ->orWhere('surname', 'like', '%' . $search . '%')
            ->orWhere('phone', 'like', '%' . $search . '%')
            ->orWhere('id', 'like', '%' . $search . '%')
            ->orWhere('email', 'like', '%' . $search . '%');
    }

    // Relations
    public function session() {
        return $this->hasOne(Session::class);
    }

    public function orders() {
        return $this->hasMany(Order::class);
    }

    public function referral() {
        return $this->belongsTo(User::class, 'referral_id', 'id');
    }

    public function comments() {
        return $this->hasMany(Comment::class)
            ->orderBy('id', 'desc');
    }

    public function note() {
        return $this->hasOne(Comment::class)
            ->orderBy('id', 'desc')
            ->where('note', 1);
    }

    public function lastPages() {
        return $this->hasMany(UserActivity::class)
            ->whereNotIn('activity_id', [1, 2])
            ->orderBy('id', 'desc')
            ->limit(10);
    }

    public function reminders() {
        return $this->hasMany(Reminder::class)
            ->orderBy('id', 'desc');
    }

    public function agentReminders() {
        return $this->hasMany(Reminder::class, 'agent_id', 'id')
            ->orderBy('id', 'desc');
    }

    public function agentRoles() {
        return $this->hasMany(AgentRole::class, 'agent_id', 'id');
    }

    public function roles() {
        return $this->morphToMany(
            config('permission.models.role'),
            'model',
            config('permission.table_names.model_has_roles'),
            'model_id',
            'role_id'
        )->orderBy('name');
    }

    public function bank_details() {
        return $this->hasOne(BankDetails::class);
    }

    public function user_documents() {
        return $this->hasMany(UserDocument::class);
    }

    public function pep() {
        return $this->hasOne(Pep::class);
    }

//    Skúška ignorovaný user
//    public static function ignoredUser(){
//        $users = User::role(['agent', 'admin', 'super admin'])->get();
//
//       foreach($users as $user) {
//          $xx[] = $user->id;
//       }
//        return $xx;
//    }


}