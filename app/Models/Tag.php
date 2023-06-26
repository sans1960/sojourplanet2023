<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Tag extends Model
{
    use HasFactory;
    protected $fillable = ['name','slug','color'];

    public function getRouteKeyName()
    {
        return 'slug';
    }
    public function sights():BelongsToMany
    {
        return $this->belongsToMany(Sight::class);
    }
  
}
