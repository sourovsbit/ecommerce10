<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductCategoryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'item_id' => 'required',
            'category_name' => 'required',
        ];
    }

    public function messages(): array
    {
        return [
            'item_id.required' => __('product_category.item_id_required'),
            'category_name.required' => __('product_Category.category_name_required'),
        ];
    }
}
