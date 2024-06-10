<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMenuRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

 
    public function rules(): array
    {
        return [
            'name' =>'required|min:6'
        ];
    }

    public function messages()
    {
        return [
            'name.required' =>'Không Để Trống',
            'name.min' =>'Trên 6 kí tự'

        ];
    }
}
