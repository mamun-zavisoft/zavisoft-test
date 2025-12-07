<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ServiceRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules()
    {
      $rules = [
    'heading' => 'required|string|max:255',
    'short_description' => 'required|string|max:1000',
    'category_id' => [
        'required',
        'exists:service_categories,id',
        Rule::unique('services', 'category_id')->ignore($this->route('id')),
    ],
];

        if ($this->isMethod('post')) {
            // On create: image is required
            $rules['service_image'] = 'required|mimes:jpg,jpeg,png,webp,svg|max:2048';
        }

        if ($this->isMethod('put') || $this->isMethod('patch')) {
            // On update: image is optional
            $rules['service_image'] = 'nullable|mimes:jpg,jpeg,png,webp,svg|max:2048';
        }

        return $rules;
    }
}
