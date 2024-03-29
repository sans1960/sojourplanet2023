<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DestinationContact extends Model
{
    use HasFactory;
    protected $fillable = ['trait','name','destination_id','surname','phone','email','city','legal','country_code_id','zipcode','duration','season','travelers',
    'children','type','romantic','mobility','countries','message','ipAdress'
   ];
   
   public function destination():BelongsTo
   {
      return $this->belongsTo(Destination::class);
   }
   public function country_code(){
    return $this->belongsTo(CountryCode::class);
}
   
    protected $casts = [
        'countries' => 'array',
        
    ];
}
