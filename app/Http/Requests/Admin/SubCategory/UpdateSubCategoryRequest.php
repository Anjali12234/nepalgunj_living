<?php

namespace App\Http\Requests\Admin\SubCategory;

use App\Enums\CategoryTypeEnum;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Enum;

class UpdateSubCategoryRequest extends FormRequest
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
            'slug' => ['nullable','string',Rule::unique('sub_categories', 'slug')->ignore($this->subCategory)],
            'status' => ['nullable','boolean'],
            'image' => ['required','mimes:jpg,jpeg,png'],
            'category_type' => ['nullable', new Enum(CategoryTypeEnum::class)],

        ];
    }
}
