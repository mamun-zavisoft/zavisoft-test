<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JobCircular extends Model
{
     protected $fillable = [
        'name',
        'type',
        'location_type',
        'experience',
        'salary_range',
        'address',
        'description',        
        'responsibilities',
        'requirement',
        'about_company',
    ];
    public function applications()
    {
        return $this->hasMany(Application::class);
    }
}
