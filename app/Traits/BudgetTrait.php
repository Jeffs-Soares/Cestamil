<?php

namespace App\Traits;

use App\Http\Model\Budget;
use App\Http\Model\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

/**
 * @param Request $request
 * @param Request $request
 * @param Budget $budget
 * @return $this|false|string
 */

trait BudgetTrait
{

    private function calcTotalValue(string $method, Request $request, Budget $budget): array|string
    {

        if ($method === 'post') {
            $product = Product::find($request->product);

            $budgetRequest = $request->all() + [
                'total_value' => ($product->value * $request->quantity) + $request->additional,
                'pay' => 0,
                'remnant' => 0
            ];

            $budget = $budgetRequest;

            return $budget;
        }

        $product = Product::find($request->product);

        $calcNewValue = ($product->value * $request->quantity) + $request->additional;

        return $calcNewValue;


    }
}
