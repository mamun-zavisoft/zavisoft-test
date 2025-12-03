<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateJobApplicationRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'status' => 'required|in:pending,shortlisted,interview_scheduled,interviewed,hired',
            'interview_date' => 'nullable|date',
            'interview_mark' => 'nullable'
        ];
    }
}
