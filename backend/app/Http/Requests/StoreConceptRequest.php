<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCourseRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title'        => 'required|string|max:150',
            'description'  => 'required|string',
            'url'          => 'required|url|max:200',
            'price'        => 'required|numeric|min:0',
            'duration'     => 'nullable|string|max:50', // por ejemplo: "10 horas"
            'level'        => 'nullable|in:beginner,intermediate,advanced',
        ];
    }
}
