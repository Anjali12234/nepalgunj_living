<?php

namespace App\Http\Requests\PropertyList;


use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdatePropertyListRequest extends FormRequest
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
            'property_owner' => ['required','string'],
            'phone_no' => ['required','regex:/^(?:\+?9779\d{9}|9\d{9})$/'],
            'whats_app' => ['required','string'],
            'email' => ['required','email'],
            'description' => ['required','string'],
            'location' => ['required','string'],
            'is_rent' => ['required'],
            'slug' => [
                'nullable',
                'string',
                Rule::unique('property_lists', 'slug')
            ],
        ];
    }
}
