<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SubUnitRequest extends FormRequest
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
            'unit_id' => 'required',
            'sub_unit_name' => 'required',
            'sub_unit_data' => 'required',
        ];
    }


    public function messages(): array
    {
        return [
            'unit_id.required' => __('sub_unit.select_unit'),
            'sub_unit_name.required' => __('sub_unit.sub_unit_name_required'),
            'sub_unit_data.required' => __('sub_unit.sub_unit_data_required'),
        ];
    }
}
