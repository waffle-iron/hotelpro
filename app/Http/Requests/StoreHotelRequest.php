<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreHotelRequest extends FormRequest
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
            'nom' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'telephone' => 'required|string|min:9',
            'nomAdmin' => 'required|string|max:255',
            'emailAdmin' => 'required|string|email|max:255|unique:users',
            'telephoneAdmin' => 'required|string|min:9',
            'cni' => 'required|string|min:9',
            'passport' => 'string|min:4',
            'g-recaptcha-response' => 'required|recaptcha',
        ];
    }
}
