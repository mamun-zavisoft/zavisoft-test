<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TeamRequest extends FormRequest
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
        $isRequest = $this->method() == 'POST' ? 'required' : 'nullable';
        return [
        'name' => 'required|string|max:255',
        'designation' => 'required|string|max:255',
        'image' => $isRequest.'|image|mimes:jpg,jpeg,png,webp|max:2048',
        'linkedin' => 'nullable|url',
        'sl_no' => 'nullable|integer|unique:teams,sl_no,'.$this->id,
        'title' => 'nullable|string|max:255',
        'short_description' => 'nullable|string|max:255',
    ];
    }
    public function messages(): array
    {
        return [
            'name.required' => 'Name is required.',
            'name.string' => 'Name must be a string.',
            'name.max' => 'Name must not exceed 255 characters.',

            'designation.required' => 'Designation is required.',
            'designation.string' => 'Designation must be a string.',
            'designation.max' => 'Designation must not exceed 255 characters.',

            'image.image' => 'Image must be an image file.',
            'image.required' => 'Image is required.',
            'image.mimes' => 'Image must be in JPG, JPEG, PNG, or WebP format.',
            'image.max' => 'Image size must not exceed 2MB.',

            'sl_no.integer' => 'Sl No must be an integer.',
            'sl_no.unique' => 'This sl no already exists.',
            'title.string' => 'Title must be a string.',
            'title.max' => 'Title must not exceed 255 characters.',
            'short_description.string' => 'Short Description must be a string.',
            'short_description.max' => 'Short Description must not exceed 255 characters.',


        ];
    }
}
