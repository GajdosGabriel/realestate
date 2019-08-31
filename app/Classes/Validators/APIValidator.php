<?php

namespace App\Classes\Validators;

use Validator;

class APIValidator {
    public static function userValidator($data) {
        return Validator::make($data, [
            'name' => 'string|max:30',
            'surname' => 'string|max:50',
            'full_name' => 'string|max:80',
            'email' => 'required|email|unique:users|max:70',
            'phone_code' => 'string|max:4',
            'phone' => 'required|string|max:20',
            'country' => 'string',
            'referral_id' => 'int|min:1|exists:users,id'
        ]);
    }
}