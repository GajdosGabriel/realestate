<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class Step1 extends FormRequest {
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
            'street' => 'required|string|max:30',
            'zip' => 'required|string|max:20',
            'city' => 'required|string|max:50',
            'region' => 'required|string|max:50',
            'country' => 'required|string|max:3',
            'nationality' => 'required|string|max:3',
            'email' => 'required|email|max:70',
            'government_id' => 'required|string|max:50',
            'phone_code' => 'required|string|max:4',
            'phone' => 'required|string|max:20',

            // Company details
            'company.name' => 'required_if:company.details,on|string|max:100',
            'company.id_number' => 'required_if:company.details,on|string|max:50',
            'company.street' => 'required_if:company.details,on|string|max:30',
            'company.zip' => 'required_if:company.details,on|string|max:20',
            'company.city' => 'required_if:company.details,on|string|max:50',
            'company.region' => 'required_if:company.details,on|string|max:50',
            'company.country' => 'required_if:company.details,on|string|max:3',

            // Joint details
            'joint.name' => 'required_if:joint.details,on|string|max:80',
            'joint.id' => 'required_if:joint.details,on|string|max:50',

            // Title deed ownership
            'tdo.project' => 'required_if:type,tdo|integer|exists:projects,id',
            'tdo.shares' => 'required_if:type,tdo|integer|min:1|max:30',

            // Pooled resources
            'pr.number' => 'required_if:type,pr|integer|min:1',
            'pr.duration' => ['required_if:type,pr', 'numeric', Rule::in([2, 3, 4])],

            'agree' => 'required|accepted'
        ];
    }
}