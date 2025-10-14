<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'max:255', 'confirmed'],
            'password_confirmation' => ['required', 'string', 'min:8'],
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => __('Name is required'),
            'name.string' => __('Name must be a string'),
            'name.max' => __('Name must not exceed 255 characters'),
            'email.required' => __('Email address is required'),
            'email.email' => __('Email must be a valid email address'),
            'email.max' => __('Email must not exceed 255 characters'),
            'email.unique' => __('Email already exists'),
            'password.required' => __('Password is required'),
            'password.string' => __('Password must be a string'),
            'password.min' => __('Password must be at least 8 characters'),
            'password.max' => __('Password must not exceed 255 characters'),
            'password.confirmed' => __('Password confirmation does not match'),
            'password_confirmation.required' => __('Password confirmation is required'),
            'password_confirmation.string' => __('Password confirmation must be a string'),
            'password_confirmation.min' => __('Password confirmation must be at least 8 characters'),
        ];
    }
}
