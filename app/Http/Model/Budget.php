<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Budget extends Model
{
    use HasFactory;
    protected $table = 'budget';
    protected $primaryKey = 'id';
    public    $timestamps = false;
    protected $fillable = [
        'client',
        'date',
        'product',
        'additional',
        'additional_products',
        'region',
        'quantity',
        'total_value',
        'pay',
        'remnant'
    ];

    public function hasProduct()
    {
        return $this->hasOne(Product::class, 'id', 'product');
    }

    public function hasRegion()
    {
        return $this->hasOne(Region::class, 'id', 'region');
    }

}
