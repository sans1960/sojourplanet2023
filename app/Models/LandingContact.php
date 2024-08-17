<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class LandingContact extends Model
{
    use HasFactory;
    protected $fillable = [
        'trait', 'name', 'surname', 'phone', 'email', 'city', 'legal', 'country_code_id', 'zipcode', 'duration', 'season', 'travelers',
        'children', 'type', 'romantic', 'mobility', 'message', 'ipAdress'
    ];

    public function country_code(): BelongsTo
    {
        return $this->belongsTo(CountryCode::class);
    }
}


