<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

 
    public function rules(): array
    {
        return [
            'title' =>'required|min:6'
        ];
    }

    public function messages()
    {
        return [
            'title.required' =>'Không Để Trống',
            'title.min' =>'Trên 6 kí tự'

        ];
    }
}
