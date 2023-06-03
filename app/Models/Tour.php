<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Tour extends Model
{
    use HasFactory;
    protected $fillable = ['name','title','subtitle','slug','description','conclusion','accommodation','meals','image','caption','city_first','city_last','price','countries','duration','date','type_id'];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function destinations():BelongsToMany
    {
        return $this->belongsToMany(Destination::class);
    }
    public function types():BelongsTo
    {
        return $this->belongsTo(Type::class);
    }
    public function day():HasMany
    {
        return $this->hasMany(Day::class);
    }
     public function tourcontact():HasMany
    {
        return $this->hasMany(TourContact::class);
    }
      public function locationtour():HasMany
    {
        return $this->hasMany(LocationTour::class);
    }
       public function imagetour():HasMany
    {
        return $this->hasMany(ImageTour::class);
    }
    public function ratios():BelongsToMany
    {
        return $this->belongsToMany(Ratio::class);
    }
  
}
