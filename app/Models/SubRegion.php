<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SubRegion extends Model
{
    use HasFactory;
    protected $fillable = ['name','slug','destination_id'];
    public function getRouteKeyName(){
        return 'slug';
    }
    public function destination():BelongsTo
    {
        return $this->belongsTo(Destination::class);
    }
}
