<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TourContact extends Model
{
    use HasFactory;
      protected $fillable = ['trait','name','tour_id','surname','phone','email','city','legal','state','zipcode','season','travelers',
    'children','romantic','mobility','message'
   ];
     public function tour():BelongsTo
   {
      return $this->belongsTo(Tour::class);
   }
}
