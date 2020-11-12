<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Motocycle extends Model
{
    use HasFactory;
    protected $fillable=[
        'brand_id',
        'name',
        'kind',
        'hp',
        'nm',
        'kg',
        'created_at',
        'updated_at'
    ];
}
