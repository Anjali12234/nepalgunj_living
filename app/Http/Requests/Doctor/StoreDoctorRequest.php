<?php

namespace App\Http\Requests\Doctor;

use Illuminate\Foundation\Http\FormRequest;

class StoreDoctorRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }


    public function rules(): array
    {
        return [
            'branch_id' => ['nullable'],
            'doctor_name' => ['required','string'],
            'department' => ['required','string'],
            'n_m_c_no' => ['required','numeric'],
            'qualification' => ['required','string'],
            'o_p_d_schedule' => ['required','string'],
            'details' => ['required','string'],
            'youtube_link' => ['required','string'],
            'clinic_address' => ['required','string'],
            'map_url' => ['required','string'],
            'twitter_url' => ['required','string'],
            'facebook_url' => ['required','string'],
            'whats_app_no' => ['required','numeric'],
            'phone_number' => ['required','string'],
            'image' => ['required','image'],

        ];
    }
}
