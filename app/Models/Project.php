<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Project extends Model
{
    protected $fillable = [
        'category_id',
        'title',
        'slug',
        'about_project',
        'business_result',
        'banner_image',
        'gallery_image',
        'challenge',
        'solution',
        'final_impact',
        'contributors',
        'platforms',
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(ProjectCategory::class, 'category_id');
    }
}
