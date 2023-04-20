<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SightContact extends Model
{
    use HasFactory;
    protected $fillable = ['trait','name','sight','country','subregion','surname','phone','email',
    'email','city','legal','state','zipcode','duration','season','travelers',
    'children','type','romantic','mobility','countries','sights','message'
   ];
   

    protected $casts = [
        'countries' => 'array',
        'sights'    => 'array'
    ];
}

