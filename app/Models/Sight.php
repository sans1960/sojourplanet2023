<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Sight extends Model
{
    use HasFactory;
    protected $fillable = ['title','slug','extract','body','image','extract','latitud','longitud','caption','zoom','destination_id','subregion_id','country_id','categorysight_id','date'];

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
    public function country():BelongsTo
    {
        return $this->belongsTo(Country::class);
    }
    public function categorysight():BelongsTo
    {
        return $this->belongsTo(CategorySight::class);
    }
    public function tags():BelongsToMany
    {
        return $this->belongsToMany(Tag::class);
    }

}
