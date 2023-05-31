<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Ratio extends Model
{
    use HasFactory;
    protected $fillable = ['ratio','icon'];

       public function types():BelongsToMany
    {
        return $this->belongsToMany(Type::class);
    }
   

}
