<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Country extends Model
{
    use HasFactory;
    protected $fillable = ['name','slug','destination_id','image','subregion_id','description','caption','latitud','longitud','zoom'];

    public function getRouteKeyName()
    {
        return 'slug';
    }
    public function destination():BelongsTo
    {
        return $this->belongsTo(Destination::class);
    }

    public function subregion():BelongsTo
    {
        return $this->belongsTo(SubRegion::class);
    }
    public function sight():HasMany
    {
        return $this->hasMany(Sight::class);
    }
}
