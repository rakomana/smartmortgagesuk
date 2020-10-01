<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class QuoteStoreRequest extends FormRequest
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
            'property_value' => 'required',
            'mortgage_value' => 'required',
            'mortgage_type' => 'required|string',
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'title' => 'nullable|string',
            'date_Of_Birth' => 'required|string',
            'email' => 'required|string',
            'phone_number' => 'required|digits_between:9,15',
            'full_address' => 'required|string'
        ];
    }
}