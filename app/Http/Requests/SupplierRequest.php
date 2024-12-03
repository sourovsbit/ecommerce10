<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class SupplierRequest extends FormRequest
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
            'area_id' => 'required',
            'supplier_name' => 'required',
            'phone' => 'required|unique:suppliers,phone,'.$request->hone,
        ];

    }

    public function messages(): array
    {
        return [
            'area_id.required' => __('supplier.area_id_required'),
            'supplier_name.required' => __('supplier.supplier_name_required'),
            'phone.required' => __('supplier.phone_required'),
        ];

    }
}
