<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SightContact extends Model
{
    use HasFactory;
    protected $guarded = [];
   

    protected $casts = [
        'countries' => 'array',
        'sights'    => 'array'
    ];
}

