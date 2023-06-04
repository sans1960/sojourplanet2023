<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Ratio extends Model
{
    use HasFactory;
    protected $fillable = ['name','value','ratio'];
    public function tours():BelongsToMany
    {
        return $this->belongsToMany(Tour::class);
    }
  
}
