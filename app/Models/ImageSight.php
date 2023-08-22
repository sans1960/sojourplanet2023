<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ImageSight extends Model
{
    use HasFactory;
    protected $fillable = ['image','slug','title','caption','sight_id'];
    public function getRouteKeyName()
  {
      return 'slug';
  }
    public function sight(): BelongsTo
  {
      return $this->belongsTo(Sight::class);
  }

}
