<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    use HasFactory;
    protected $fillable = ['name','slug','blog_id','image','order','body','caption','latitud','longitud','zoom'];

    public function getRouteKeyName()
    {
        return 'slug';
    }
    public function blog():BelongsTo
    {
        return $this->belongsTo(Blog::class);
    }

}
