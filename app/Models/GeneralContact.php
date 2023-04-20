<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GeneralContact extends Model
{
    use HasFactory;
    protected $fillable = ['trait','name','surname','phone','email'
    ,'city','legal','state','zipcode','duration','season','travelers',
    'children','type','romantic','mobility','message'];
}
