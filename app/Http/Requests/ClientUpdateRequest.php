<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'company_name' => 'required|max:20',
            'address' => 'required|max:30',
            'postal_code' => 'required|numeric|digits_between:3,10',
            'city' => 'required|max:20',
            'country' => 'required|max:20',
            'phone' => 'max:15',
            'mobile' => 'required|max:15',
            'mail' => 'required|email|max:40',
            'contact_person' => 'max:20'
        ];
    }
}
