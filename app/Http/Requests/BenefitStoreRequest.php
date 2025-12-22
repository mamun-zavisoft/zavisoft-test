<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BenefitStoreRequest extends FormRequest
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
            'benefifts' => 'required|array|min:1',
            'benefifts.*.short_description' => 'required|string|max:500',
            'benefifts.*.icon' => 'nullable|file|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        ];
    }

    public function messages(): array
    {
        return [
            'benefifts.required' => 'At least one benefit is required.',
            'benefifts.min' => 'At least one benefit is required.',

            'benefifts.*.short_description.required' => 'Short description is required.',
            'benefifts.*.short_description.max' => 'Short description must not exceed 500 characters.',

            'benefifts.*.icon.mimes' => 'Icon must be an image file (jpeg, png, jpg, gif, svg, webp).',
            'benefifts.*.icon.max' => 'Icon size must not exceed 2MB.',
        ];
    }
  
}
