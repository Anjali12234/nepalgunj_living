<?php

namespace App\Http\Requests\Hospital;

use Illuminate\Foundation\Http\FormRequest;

class StoreHospitalRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }


    public function rules(): array
    {
        return [
            'hospital_name' => ['required', 'string'],
            'o_p_d_schedule' => ['required', 'string'],
            'details' => ['required', 'string'],
            'youtube_link' => ['required', 'string'],
            'hospital_address' => ['required', 'string'],
            'map_url' => ['required', 'string'],
            'twitter_url' => ['required', 'string'],
            'facebook_url' => ['required', 'string'],
            'contact_number' => ['required', 'string'],
            'files' => ['required', 'array'],
            'files.*' => ['mimes:png,jpg,jpeg,pdf,jfif'],

        ];
    }
}
