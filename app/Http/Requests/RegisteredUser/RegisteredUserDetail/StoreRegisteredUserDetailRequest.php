<?php

namespace App\Http\Requests\RegisteredUser\RegisteredUserDetail;

use Illuminate\Foundation\Http\FormRequest;

class StoreRegisteredUserDetailRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }


    public function rules(): array
    {
        return [

            'image' => [
                'nullable',
                'image',
                'mimes:png,jpg,jpeg',
                'max:2048',
            ],
            'cover_image' => [
                'nullable',
                'image',
                'mimes:png,jpg,jpeg',
                'max:2048',
                // 'dimensions:width=1210,height=150'
            ],
            'citizenship_no' => ['nullable', 'string'],
            'address' => ['nullable', 'string'],
            'citizenship_image_front' => ['nullable', 'image', 'mimes:png,jpg,jpeg'],
            'citizenship_image_back' => ['nullable', 'image', 'mimes:png,jpg,jpeg'],
            'ward_no' => ['nullable', 'integer'],

        ];
    }
}
