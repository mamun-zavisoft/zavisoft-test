<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JobCircular extends Model
{
     protected $fillable = [
        'name',
        'type',
        'experience',
        'salary_range',
        'address',
        'description',        
        'responsibilities',
        'requirement',
        'about_company',
    ];
}
