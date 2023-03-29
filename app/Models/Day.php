<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Day extends Model
{
    use HasFactory;
    protected $fillable = ['name','slug','tour_id','image','order','body','caption','latitud','longitud','zoom'];

    public function getRouteKeyName()
    {
        return 'slug';
    }
    public function tour():BelongsTo
    {
        return $this->belongsTo(Tour::class);
    }
}
