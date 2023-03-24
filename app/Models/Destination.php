<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    use HasFactory;
    protected $fillable = ['name','slug','title','subtitle','body','sidebody','image','caption'];

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
