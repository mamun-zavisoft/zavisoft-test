<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

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
            'title' => [
                'required',
                'string',
                'max:255',
                Rule::unique('projects', 'title')->where(function ($query) {
                    return $query->where('category_id', $this->input('category_id'));
                })->ignore($this->route('id')),
            ],
            'slug' => 'nullable|string|max:255',
            'about_project' => 'required|string',
            'business_result' => 'required|string',

            // Required on create, optional on update
            'banner_image' => ($isCreate ? 'required' : 'nullable') . '|mimes:jpg,jpeg,png,webp,svg|max:2048',
            'gallery_image'   => ($isCreate ? 'required' : 'nullable') . '|array',
            'gallery_image.*' => 'mimes:jpg,jpeg,png,webp,svg|max:5120',

            'challenge' => 'required|string',
            'solution' => 'required|string',
            'final_impact' => 'required|string',
            'contributors' => 'required|string',
            'platforms' => 'required|string',
        ];
    }

    public function messages(): array
    {
        return [
            'title.unique' => 'A project with this title already exists in the selected category.',
        ];
    }

}
