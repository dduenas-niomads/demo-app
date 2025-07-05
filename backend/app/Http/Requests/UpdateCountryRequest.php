<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCountryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /*Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules()
    {
        return [
            'name'         => 'string|required|max:100',
            'description'  => 'string|required',
            'country'      => 'string|required',
            'population'   => 'numeric',
            'code'         => 'string|required|max:5',
            'iso_code'     => 'string|required|max:3',
        ];
    }
}
