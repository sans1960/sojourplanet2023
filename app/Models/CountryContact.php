<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CountryContact extends Model
{
    use HasFactory;
    protected $fillable = [
        'trait', 'name', 'country_id', 'surname', 'phone', 'email', 'city', 'legal', 'country_code_id', 'zipcode', 'duration', 'season', 'travelers',
        'children', 'type', 'romantic', 'mobility', 'countries', 'message', 'ipAdress'
    ];
    public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class);
    }
    public function country_code(): BelongsTo
    {
        return $this->belongsTo(CountryCode::class);
    }

    protected $casts = [
        'countries' => 'array',

    ];
}
