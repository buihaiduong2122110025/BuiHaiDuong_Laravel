<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

 
    public function rules(): array
    {
        return [
            'name' =>'required|min:3',
            'description' =>'min:3',
            'detail' =>'min:3'


        ];
    }

    public function messages()
    {
        return [
            'name.required' =>'Không Để Trống',
            'name.min' =>'Trên 3 kí tự',
            'description.min' =>'Trên 5 kí tự',
            'detail.min' =>'Trên 5 kí tự'

        ];
    }
}
