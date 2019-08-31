<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PepRequest extends FormRequest {
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
            'user_id' => 'required|integer|exists:users,id',
            'is_pep' => 'required|string',
            'type' => 'nullable|string',
            'sanctioned' => 'required|string',
            'end_user' => 'required|string',
            'government_sector' => 'required|string',
            'government_sector_type' => 'nullable|string|max:255',
            'sectors' => 'required|string',
            'sector_type' => 'nullable|string|max:255',
            'businessman' => 'required|string',
            'investment' => 'required|string',
        ];
    }
}
