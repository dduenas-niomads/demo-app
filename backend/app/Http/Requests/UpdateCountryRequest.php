<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Country;

class UpdateCountryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize()
    {
        return true;
    }

    /*Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules()
    {
        $validIsoCodes = Country::all()->pluck('iso_code')->toArray();
        $validFlags = Country::all()->pluck('flag')->toArray();

        return [
            'name'         => 'string|required|max:100',
            'description'  => 'string|required',
            'country'      => 'string|required',
            'population'   => 'numeric',
            'code'         => 'string|required|max:5',
            'iso_code'     => 'string|required|max:3' . implode(',', $validIsoCodes),
            'flag'         => 'string|required|max:100' . implode(',', $validFlags),
        ];
    }
}
