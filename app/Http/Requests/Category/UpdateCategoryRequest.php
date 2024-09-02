<?php

namespace App\Http\Requests\Category;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateCategoryRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'category_id' => ['nullable'],
            'title_en' => ['required','string'],
            'title_ne' => ['required','string'],
            'position' => ['nullable','string'],
            'slug' => ['nullable','string',Rule::unique('categories', 'slug')->ignore($this->category)],
            'status' => ['nullable','boolean'],
            'image' => ['nullable','image'],
        ];
    }
}
