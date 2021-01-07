<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

    protected $fillable = [
        'brand',
        'country',
        'gp',
        'wsbk',
        'created_at',
        'updated_at'
    ];

//protected $primaryKey = "[


    public function motocycles()
    {
        return $this->hasMany('App\Models\motocycle', 'brand_id');
    }

    public function delete()
    {
        $this->motocycles()->delete();
        return parent::delete();
    }
}
