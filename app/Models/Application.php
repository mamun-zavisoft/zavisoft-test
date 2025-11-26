<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
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
        'status'
    ];

     public function job()
    {
        return $this->belongsTo(JobCircular::class, 'job_id');
    }
}
