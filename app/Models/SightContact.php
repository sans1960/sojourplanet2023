<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SightContact extends Model
{
    use HasFactory;
    protected $fillable = ['trait','name','sight_id','surname','phone','email','city','legal','country_code_id','zipcode','duration','season','travelers',
    'children','type','romantic','mobility','countries','sights','message','ipAdress'
   ];
   
   public function sight():BelongsTo
   {
       return $this->belongsTo(Sight::class);
   }
   public function country_code(){
    return $this->belongsTo(CountryCode::class);
}
   
    protected $casts = [
        'countries' => 'array',
        'sights'    => 'array'
    ];
}

