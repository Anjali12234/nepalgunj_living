<?php

namespace App\Http\Requests\Pharmacy;

use Illuminate\Foundation\Http\FormRequest;

class StorePharmacyRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }


    public function rules(): array
    {
        return [
            'pharmacy_name' => ['required', 'string'],
            'opening_hours' => ['required', 'string'],
            'details' => ['required', 'string'],
            'youtube_link' => ['required', 'string'],
            'pharmacy_address' => ['required', 'string'],
            'map_url' => ['required', 'string'],
            'twitter_url' => ['required', 'string'],
            'facebook_url' => ['required', 'string'],
            'contact_number' => ['required', 'string'],
            'files' => ['required', 'array'],
            'files.*' => ['mimes:png,jpg,jpeg,jfif'],

        ];
    }
}
