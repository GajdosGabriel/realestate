<?php

namespace App\Classes\Validators;

use Validator;

class MemberValidator {
    public static function accountValidator($data) {
        $arrRules = [
            'name' => 'required|string|max:30',
            'surname' => 'required|string|max:50',
            'phone_code' => 'required|string|min:1|max:4',
            'phone' => 'required|string|max:20',
            'country' => 'required|string|min:3|max:3',
        ];

        if (isset($data['company'])) $arrRules['company'] = 'string|max:100';
        if (isset($data['url'])) $arrRules['url'] = 'string|max:100';
        if ($data['password'] != null) $arrRules['password'] = 'string|min:8|max:20|confirmed';

        return Validator::make($data, $arrRules);
    }

    public static function contactValidator($data) {
        return Validator::make($data, [
            'text' => 'required|string|max:500'
        ]);
    }
}