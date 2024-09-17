<?php

namespace App\Http\Requests\Medical;

use Illuminate\Foundation\Http\FormRequest;

class UpdateMedicalRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }


    public function rules(): array
    {
        return [
            'medical_name' => ['required', 'string'],
            'opening_hours' => ['required', 'string'],
            'details' => ['required', 'string'],
            'youtube_link' => ['required', 'string'],
            'medical_address' => ['required', 'string'],
            'map_url' => ['required', 'string'],
            'twitter_url' => ['required', 'string'],
            'facebook_url' => ['required', 'string'],
            'contact_number' => ['required', 'string'],
            'files' => ['nullable', 'array'],
            'files.*' => ['mimes:png,jpg,jpeg,jfif'],

        ];
    }
}
