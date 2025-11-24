<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ApplicationRequest extends FormRequest
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
            'name' => 'required|string|max:50',
            'email' => 'required|email',
            'github' => 'nullable|url',
            'linkedin' => 'nullable|url',
            'about' => 'required|string|max:550',
            'cv' => 'required|file|mimes:pdf|max:2048'
        ];
    }

    public function messages(): array
    {
        return [
            // Name
            'name.required' => 'Please provide your name.',
            'name.string' => 'Name must be valid text.',
            'name.max' => 'Name may not be greater than 50 characters.',

            // Email
            'email.required' => 'Please provide your email address.',
            'email.email' => 'Please provide a valid email address.',
            'email.max' => 'Email may not be greater than 255 characters.',

            // About
            'about.required' => 'Please write something about yourself.',
            'about.string' => 'About section must be valid text.',
            'about.max' => 'About section may not exceed 550 characters.',

            // CV
            'cv.file' => 'CV must be a valid file.',
            'cv.mimes' => 'Only PDF files are allowed.',
            'cv.max' => 'CV size may not exceed 2MB.'
        ];
    }
}
