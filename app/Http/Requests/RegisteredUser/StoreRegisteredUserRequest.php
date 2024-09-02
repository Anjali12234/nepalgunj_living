<?php

namespace App\Http\Requests\RegisteredUser;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreRegisteredUserRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'username' => ['required', 'string', 'max:255',Rule::unique('registered_users', 'username')],
            'gender' => ['required', 'string'],
            'd_o_b' => ['required', 'date'],
            'is_active' => ['nullable','boolean'],
            'email' => ['required', 'email', Rule::unique('registered_users', 'email')],
            'password' => ['required', 'confirmed'],
            'phone_no' => ['required', 'regex:/^(?:\+?9779\d{9}|9\d{9})$/', Rule::unique('registered_users', 'phone_no')],

        ];
    }
}
