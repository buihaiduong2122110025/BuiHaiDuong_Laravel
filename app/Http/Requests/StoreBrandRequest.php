<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBrandRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

 
    public function rules(): array
    {
        return [
            'name' =>'required|min:3',
            'description' =>'min:4'

        ];
    }

    public function messages()
    {
        return [
            'name.required' =>'Không Để Trống',
            'name.min' =>'Trên 3 kí tự',
            'description.min' =>'Trên 4 kí tự'
        ];
    }
}
