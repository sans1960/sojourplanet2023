<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Country extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'slug', 'destination_id', 'image', 'subregion_id', 'description', 'caption', 'latitud', 'longitud', 'zoom', 'population', 'capital', 'language', 'currency', 'time_difference', 'best_times', 'sidebody', 'information', 'nearby', 'intro', 'advisory_id', 'state' ,'meta_description','meta_title'];

    public function getRouteKeyName()
    {
        return 'slug';
    }
    public function destination(): BelongsTo
    {
        return $this->belongsTo(Destination::class);
    }
    public function advisory(): BelongsTo
    {
        return $this->belongsTo(Advisory::class);
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
    public function countrycontact(): HasMany
    {
        return $this->hasMany(CountryContact::class);
    }
    public function tours(): BelongsToMany
    {
        return $this->belongsToMany(Tour::class);
    }
    public function sights(): BelongsToMany
    {
        return $this->belongsToMany(Sight::class);
    }
    protected $casts = [
        'nearby' => 'array'
    ];
}
