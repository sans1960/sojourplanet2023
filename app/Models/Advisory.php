<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Advisory extends Model
{
    use HasFactory;
    protected $fillable = ['level', 'legend', 'color'];
    public function country(): HasMany
    {
        return $this->hasMany(Country::class);
    }
}
