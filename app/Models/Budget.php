<?php

namespace App\Models;

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

    public function CalcValueOnUpdate(Request $request, Budget $budget)
    {

        if($request->additional == $budget->additional){

            $budget->fill($request->all());
            $budget->total_value = $this-> totalValueCalc($request->method(), $request, $budget);
            $budget->remnant = $budget->total_value - $budget->pay;
            $budget->save();

            return redirect(route('budget.index'));

        };

        if($request->additional > $budget->additional  ){

            $budget->fill($request->all());
            $budget->total_value = $budget -> totalValueCalc($request->method(), $request, $budget);
            $budget->remnant = $budget->total_value - $budget->pay;
            $budget->save();

            return redirect(route('budget.index'));

        };

            $budget->fill($request->all());
            $budget->total_value = $budget -> totalValueCalc($request->method(), $request, $budget);
            $budget->remnant = $budget->total_value - $budget->pay;

            if($budget->remnant < 0){

                return redirect(route('budget.edit', $budget));
            };

            $budget->save();
            return redirect(route('budget.index'));

    }

    public function CalcValueOnPay(Request $request, Budget $budget)
    {

        $payRequest = $request->get('pay');

        if ($payRequest > $budget->total_value) {

            return redirect(route('payCreate', $budget));

        } else if ($payRequest > $budget->remnant) {

            return redirect(route('payCreate', $budget));
        }

        if ($budget->pay + $payRequest > $budget->total_value) {
            return redirect(route('payCreate', $budget));
        }

        $budget->pay += $payRequest;
        $budget->remnant = $budget->total_value - $budget->pay;

        return $budget->save();

    }

}
