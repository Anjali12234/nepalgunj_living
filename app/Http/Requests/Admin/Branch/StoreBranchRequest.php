<?php

namespace App\Http\Requests\Admin\Branch;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreBranchRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'title' => ['required','string'],
            'position' => ['nullable','string'],
            'slug' => [
                'nullable',
                'string',
                Rule::unique('branches', 'slug')
            ],
        ];
    }
}
