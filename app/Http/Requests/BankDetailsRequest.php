<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BankDetailsRequest extends FormRequest {
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
            'iban' => 'required|string|max:50',
            'name' => 'required|string|max:80',
            'address' => 'required|string|max:100',
            'bank_name' => 'required|string|max:50',
            'bank_address' => 'required|string|max:100',
            'bic' => 'required|string|max:20',
        ];
    }
}
