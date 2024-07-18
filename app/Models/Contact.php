<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Contact extends Model
{
    use HasFactory;
    protected $fillable = [
        'trait', 'name', 'surname', 'phone', 'email', 'city', 'legal', 'country_code_id', 'zipcode',  'message', 'ipAdress'
    ];

    public function country_code(): BelongsTo
    {
        return $this->belongsTo(CountryCode::class);
    }
}
