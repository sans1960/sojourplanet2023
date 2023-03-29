<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Type extends Model
{
    use HasFactory;
    protected $fillable = ['name','slug','color'];

    public function getRouteKeyName()
    {
        return 'slug';
    }
    public function tours():BelongsToMany
    {
        return $this->belongsToMany(Type::class);
    }
}
