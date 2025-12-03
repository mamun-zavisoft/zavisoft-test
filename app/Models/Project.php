<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'category_id',
        'title',
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
}
