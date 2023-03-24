<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

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
        return $this->hasMany(SubRegion::class);
    }
}
