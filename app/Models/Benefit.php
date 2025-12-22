<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Benefit extends Model
{
    protected $fillable = [
       'icon',
        'short_description',
        'sort_order',
    ];
}
