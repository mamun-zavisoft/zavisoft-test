<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            'email' => ['required', 'email', 'exists:users,email'],
            'password' => ['required', 'string', 'min:8', 'max:255'],
        ];
    }

    public function messages(): array
    {
        return [
            'email.required' => __('Email address is required'),
            'email.email' => __('Email must be a valid email address'),
            'email.exists' => __('Email does not exist'),
            'password.required' => __('Password is required'),
            'password.string' => __('Password must be a string'),
            'password.min' => __('Password must be at least 8 characters'),
            'password.max' => __('Password must not exceed 255 characters'),
        ];
    }
}
