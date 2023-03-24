<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ImageDestination extends Model
{
    use HasFactory;
    protected $fillable = ['image','slug','title','caption','destination_id'];

    public function getRouteKeyName()
    {
        return 'slug';
    }
    public function destination(): BelongsTo
    {
        return $this->belongsTo(Destination::class);
    }
}
