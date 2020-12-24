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
        'out',
        'maketime',
        'created_at',
        'updated_at'
    ];
    public function scopehypercar($query,$pos)
    {
        $query->JOIN('brands', 'brands.id', 'motocycles.brand_id')
            ->WHERE('kind','like',$pos)
            ->ORDERBY('id')
            ->select(
                'motocycles.id',
                'brands.brand',
                'brands.country',
                'motocycles.name as mname',
                'motocycles.kind',
                'motocycles.hp',
                'motocycles.nm',
                'motocycles.kg',
                'motocycles.out',
                'motocycles.maketime');
    }
    public function scopeallkinds($query)
    {
        $query->select('kind')->groupBy('kind');
    }
    public function scopekind($query,$ki)
    {
        $query->join('brands','brands.id','=','motocycles.brand_id')
            ->WHERE('kind','=',$ki)
            ->orderby('id')
            ->select(
                'motocycles.id',
                'brands.brand',
                'brands.country',
                'motocycles.name as mname',
                'motocycles.kind',
                'motocycles.hp',
                'motocycles.nm',
                'motocycles.kg',
                'motocycles.out',
                'motocycles.maketime');
    }
    public function scopeallhypercar($query)
    {
        $query->select('kind')->groupBy('kind');
    }
}
