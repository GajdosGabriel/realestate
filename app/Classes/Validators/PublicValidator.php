<?php

namespace App\Classes\Validators;

use Validator;

class PublicValidator {
    public static function contactValidator($data) {
        return Validator::make($data, [
            'name' => 'required|string|max:30',
            'surname' => 'required|string|max:50',
            'email' => 'required|email|max:70',
            'phone_code' => 'required|string|max:4',
            'phone' => 'required|string|max:20',
            'text' => 'required|string|min:20|max:500',
            'g-recaptcha-response' => 'required|string'
        ]);
    }
}