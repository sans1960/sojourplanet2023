<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CategoryBlog extends Model
{
    use HasFactory;
    protected $fillable = ['name','slug'];

    public function getRouteKeyName()
    {
        return 'slug';
    }
    public function blog():HasMany
    {
        return $this->hasMany(Blog::class);
    }
}
