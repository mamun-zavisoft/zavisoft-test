<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable = [
        'sl_no',
        'name',
        'designation',
        'image',
        'linkedin',
        'status',
        'title',
        'short_description',
    ];
}
