<?php

namespace App\Http\Requests\Admin\SubCategory;

use App\Enums\CategoryTypeEnum;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Enum;

class StoreSubCategoryRequest extends FormRequest
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
            'slug' => [
                'nullable',
                'string',
                Rule::unique('sub_categories', 'slug')
            ],
            'status' => ['nullable','boolean'],
            'image' => ['nullable','image'],
            'category_type' => ['required', new Enum(CategoryTypeEnum::class)],

        ];
    }
}
