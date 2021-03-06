<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminStoreMannequinRequest extends FormRequest
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
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|unique:mannequins|max:255',
            'phone' => 'required|string|max:255',
            'city' => 'string|max:255',
            'instagram' => 'string|max:255',
            'gender' => 'required|string|max:255',
            'height' => 'required|numeric',
            'waist' => 'required|numeric',
            'bust' => 'required|numeric',
            'hips' => 'required|numeric',
            'shoe_size' => 'required|numeric',
            'eyes_color' => 'required|string|max:255',
            'hair_color' => 'required|string|max:255',
        ];
    }
}
