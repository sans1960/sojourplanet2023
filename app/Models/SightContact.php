<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SightContact extends Model
{
    use HasFactory;
    protected $fillable = ['trait','name','sight_id','surname','phone','email','city','legal','state','zipcode','duration','season','travelers',
    'children','type','romantic','mobility','countries','sights','message'
   ];
   
   public function sight():BelongsTo
   {
       return $this->belongsTo(Sight::class);
   }
    protected $casts = [
        'countries' => 'array',
        'sights'    => 'array'
    ];
}

