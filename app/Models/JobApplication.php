<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class JobApplication extends Model
{
    protected $fillable = [
        'job_id',
        'name',
        'phone',
        'email',
        'github',
        'linkedin',
        'about',
        'cv',
        'status',
        'interview_date',
        'interview_mark'
    ];

    public function job(): BelongsTo
    {
        return $this->belongsTo(JobCircular::class, 'job_id');
    }
}
