<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImageTour extends Model
{
    use HasFactory;
     protected $fillable = ['image','slug','title','caption','tour_id'];
      public function getRouteKeyName()
    {
        return 'slug';
    }
      public function tour(): BelongsTo
    {
        return $this->belongsTo(Tour::class);
    }
}
