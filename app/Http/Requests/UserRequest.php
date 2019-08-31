<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest {
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {
        return [
            'name' => 'required|string|max:30',
            'surname' => 'required|string|max:50',
            'email' => 'required|string|email|max:70|unique:users',
            'phone_code' => 'required|string|min:1|max:4',
            'phone' => 'required|string|max:20',
            'country' => 'required|string|min:3|max:3',
            'password' => 'required|string|min:8|max:20|confirmed',
        ];
    }
}
