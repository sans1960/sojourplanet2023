<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Country extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'slug', 'destination_id', 'image', 'subregion_id', 'description', 'caption', 'latitud', 'longitud', 'zoom', 'population', 'capital', 'language', 'currency', 'time_difference', 'best_times', 'sidebody', 'information', 'nearby', 'intro'];

    public function getRouteKeyName()
    {
        return 'slug';
    }
    public function destination(): BelongsTo
    {
        return $this->belongsTo(Destination::class);
    }

    public function subregion(): BelongsTo
    {
        return $this->belongsTo(SubRegion::class, 'subregion_id');
    }
    public function sight(): HasMany
    {
        return $this->hasMany(Sight::class);
    }
    public function location(): HasMany
    {
        return $this->hasMany(Location::class);
    }
    public function experience(): HasMany
    {
        return $this->hasMany(Experience::class);
    }
    public function acommodation(): HasMany
    {
        return $this->hasMany(Acommodation::class);
    }
    protected $casts = [
        'nearby' => 'array'
    ];
}
