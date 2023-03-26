<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Blog extends Model
{
    use HasFactory;
    protected $fillable = ['name','slug','image','caption','description','conclusion','category_blog_id','date'];

    public function getRouteKeyName()
    {
        return 'slug';
    }
    public function categoryblog():BelongsTo
    {
        return $this->belongsTo(CategoryBlog::class,'category_blog_id');
    }
    public function post():HasMany
    {
        return $this->hasMany(Post::class);
    }
}
