<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JobCircular extends Model
{
     protected $fillable = [
        'name',
        'type',
        'experience',
        'salaryrange',
        'address',
        'description',        
        'responsibilities',
        'requirement',
        'aboutcompany',
    ];
}
