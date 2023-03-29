<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Tour extends Model
{
    use HasFactory;
    protected $fillable = ['name','slug','description','conclusion','image','caption','price','countries','duration','date'];

    public function getRouteKeyName()
    {
        return 'slug';
    }
    protected $casts = [
        'countries' => 'array',
    ];
    public function destinations():BelongsToMany
    {
        return $this->belongsToMany(Destination::class);
    }
    public function types():BelongsToMany
    {
        return $this->belongsToMany(Type::class);
    }
}
