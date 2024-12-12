<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class ProductInformationRequest extends FormRequest
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
    public function rules(Request $request): array
    {
        return [
            'item_id' => 'required',
            'category_id' => 'required',
            'unit_id' => 'required',
            'product_name' => 'required|unique:product_informations,product_name,'.$request->product_name,
        ];
    }

    public function messages(): array
    {
        return [
            'item_id.required' => __('product_informtion.item_id_required'),
            'category_id.required' => __('product_informtion.category_id_required'),
            'unit_id.required' => __('product_informtion.unit_id_required'),
            'product_name.required' => __('product_informtion.product_name_required'),
            'product_name.unique' => __('product_informtion.product_name_unique'),
        ];
    }
}
