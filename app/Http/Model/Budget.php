<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

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

    public function totalValueCalc(string $method, Request $request, Budget $budget)
    {

        if ($method === 'POST') {
            $product = Product::find($request->product);

            $budgetRequest = $request->all() + [
                    'total_value' => ($product->value * $request->quantity) + $request->additional,
                    'pay' => 0,
                    'remnant' => ($product->value * $request->quantity) + $request->additional
                ];

            $budget = $budgetRequest;

            return $budget;
        }

        $product = Product::find($request->product);

        $calcNewValue = ($product->value * $request->quantity) + $request->additional;

        return $calcNewValue;
    }

}
