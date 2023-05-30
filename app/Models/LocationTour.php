<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class LocationTour extends Model
{
    use HasFactory;
      protected $fillable = ['site','slug','latitud','longitud','zoom','tour_id'];

    public function getRouteKeyName()
    {
        return 'slug';
    }
      public function tour():BelongsTo
    {
        return $this->belongsTo(Tour::class);
    }
}
