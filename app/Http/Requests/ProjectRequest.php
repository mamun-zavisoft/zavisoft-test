<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjectRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $isCreate = $this->isMethod('post');

        return [
            'category_id' => 'required|exists:project_categories,id',
            'title' => 'required|string|max:255',
            'about_project' => 'required|string',
            'business_result' => 'required|string',

            // Required on create, optional on update
            'banner_image' => ($isCreate ? 'required' : 'nullable') . '|image|mimes:jpg,jpeg,png,svg|max:2048',
            'gallery_image' => ($isCreate ? 'required' : 'nullable') . '|image|mimes:jpg,jpeg,png,svg|max:2048',

            'challenge' => 'required|string',
            'solution' => 'required|string',
            'final_impact' => 'required|string',
            'contributors' => 'required|string',
            'platforms' => 'required|string',
        ];
    }

}
