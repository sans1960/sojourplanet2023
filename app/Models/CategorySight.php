<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CategorySight extends Model
{
    use HasFactory;
    protected $fillable = ['name','slug'];

    public function getRouteKeyName()
    {
        return 'slug';
    }
    public function sight():HasMany
    {
        return $this->hasMany(Sight::class);
    }

}
