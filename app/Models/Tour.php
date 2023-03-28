<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    use HasFactory;
    protected $fillable = ['name','slug','description','image','caption','price','countries','duration','date'];

    public function getRouteKeyName()
    {
        return 'slug';
    }
    protected $casts = [
        'countries' => 'array',
    ];
}
