<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class JobCircular extends Model
{
    protected $fillable = [
        'name',
        'type',
        'slug',
        'location_type',
        'experience',
        'vacancy',
        'salary_range',
        'address',
        'description',
        'responsibilities',
        'requirement',
        'about_company',
    ];

    public function applications(): JobCircular|HasMany
    {
        return $this->hasMany(JobApplication::class);
    }
}
