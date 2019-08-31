<?php

namespace App\Classes\Validators;

use Validator;

class AdminValidator {
    public static function articleValidator($data) {
        return Validator::make($data, [
            'title' => 'required|string|max:100',
            'body' => 'required|string'
        ]);
    }

    public static function user($data) {
        return Validator::make($data, [
            'name' => 'required|string|max:30',
            'surname' => 'required|string|max:50',
            'email' => 'required|string|email|max:70|unique:users',
            'phone_code' => 'required|string|min:1|max:4',
            'phone' => 'required|string|max:20',
            'country' => 'required|string|min:3|max:3',
            'password' => 'required|string|min:8|max:20|confirmed',
        ]);
    }

    public static function userEditValidator($data) {
        return Validator::make($data, [
            'name' => 'required|string|max:30',
            'surname' => 'required|string|max:50',
            'phone' => 'required|string|max:20',
            'country' => 'required|string|min:3|max:3',
            'company' => 'max:100',
            'url' => 'max:100',
            'password' => 'nullable|string|min:8|max:20|confirmed'
        ]);
    }

    public static function comment($data) {
        return Validator::make($data, [
            'user_id' => 'required|int|exists:users,id',
            'author_id' => 'required|int|exists:users,id',
            'text' => 'required|string|max:300',
        ]);
    }
}