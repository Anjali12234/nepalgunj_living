<?php

namespace App\Http\Requests\PropertyList;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StorePropertyListRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }


    public function rules(): array
    {
        return [
            'title' => ['required','string'],
            'rate' => ['required','string'],
            'description' => ['required','string'],
            'location' => ['required','string'],
            'is_rent' => ['required'],
            'location' => ['required','string'],
            'bed_room' => ['required','numeric'],
            'bathroom' => ['required','numeric'],
            'internet' => ['required','string'],
            'parking' => ['required','string'],
            'area' => ['required','string'],
            'kitchen_type' => ['required','string'],
            'deposit' => ['required','string'],
            'features' => ['required','string'],
            'slug' => [
                'nullable',
                'string',
                Rule::unique('property_lists', 'slug')
            ],
            'files' => ['required', 'array'],
            'files.*' => ['mimes:png,jpg,jpeg,pdf,jfif,webp'],
        ];
    }
}
