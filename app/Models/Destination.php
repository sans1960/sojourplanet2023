<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Destination extends Model
{
    use HasFactory;
    protected $fillable = ['name','slug','title','subtitle','body','sidebody','image','caption'];

    public function getRouteKeyName()
    {
        return 'slug';
    }
    public function imagedestination(): HasMany
    {
        return $this->hasMany(ImageDestination::class);
    }
    public function subregion():HasMany
    {
        return $this->hasMany(SubRegion::class,'subregion_id');
    }
    public function country():HasMany
    {
        return $this->hasMany(Country::class);
    }
    public function sight():HasMany
    {
        return $this->hasMany(Sight::class);
    }
    public function tours():BelongsToMany
    {
        return $this->belongsToMany(Type::class);
    }
    public function destinationcontact():HasMany
    {
        return $this->hasMany(DestinationContact::class);
    }
}
