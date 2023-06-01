<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Type extends Model
{
    use HasFactory;
    protected $fillable = ['name','slug','icon','ratio'];

    public function getRouteKeyName()
    {
        return 'slug';
    }
    public function tours():BelongsToMany
    {
        return $this->belongsToMany(Tour::class);
    }
 
}
