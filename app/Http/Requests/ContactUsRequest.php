<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactUsRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:50'],
            'email' => ['required', 'email', 'max:50'],
            'service_name' => ['required', 'string', 'max:50'],
            'project_details' => ['required', 'string'],
        ];
    }

    /**
     * Customize attribute names for validation messages (optional).
     */
    public function attributes(): array
    {
        return [
            'service_name' => 'service name',
            'project_details' => 'project details',
        ];
    }

    /**
     * Custom error messages for validator errors.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'name.required' => 'Please provide your name.',
            'name.string' => 'Name must be a valid text.',
            'name.max' => 'Name may not be greater than 50 characters.',

            'email.required' => 'Please provide your email address.',
            'email.email' => 'Please provide a valid email address.',
            'email.max' => 'Email may not be greater than 50 characters.',

            'service_name.required' => 'Please select or provide the service you are interested in.',
            'service_name.string' => 'Service name must be a valid text.',
            'service_name.max' => 'Service name may not be greater than 50 characters.',

            'project_details.required' => 'Please provide details about your project.',
            'project_details.string' => 'Project details must be provided as text.',
        ];
    }
}
