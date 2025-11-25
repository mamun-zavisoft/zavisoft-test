<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JobCircularRequest extends FormRequest
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
            'name' => 'required|string|max:250',
            'type' => 'required|string',
            'experience' => 'required|string|max:100',
            'salary_range' => 'required|string|max:200',
            'address' => 'required|string|max:1000',
            'description' => 'required|string',
            'responsibilities' => 'required|string',
            'requirement' => 'required|string',
            'about_company' => 'required|string',
        ];
    }
    public function messages(): array
    {
        return [
            'name.required' => 'Position name is required.',
              'name.string' => 'Name must be valid text.',
            'name.max' => 'Name may not be greater than 250 characters.',

            'type.required' => 'Position type is required.',
            'type.string' => 'Position type must be valid text.',

            'experience.required' => 'Experience is required.',
            'experience.string' => 'Experience must be valid text.',
            'experience.max' => 'Experience may not be greater than 100 characters.',

            'salary_range.required' => 'Salary range is required.',
            'salary_range.string' => 'Salary range must be valid text.',
            'salary_range.max' => 'Salary range may not be greater than 200 characters.',

            'address.required' => 'Address is required.',
            'address.string' => 'Address must be valid text.',
            'address.max' => 'Address may not be greater than 1000 characters.',

            'description.required' => 'Description is required.',
            'description.string' => 'Description must be valid text.',

            'responsibilities.required' => 'Responsibilities is required.',
            'responsibilities.string' => 'Responsibilities must be valid text.',

            'requirement.required' => 'Requirement is required.',
            'requirement.string' => 'Requirement must be valid text.',

            'about_company.required' => 'About company is required.',
            'about_company.string' => 'About company must be valid text.',
        ];
    }
}
