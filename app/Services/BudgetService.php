<?php

namespace App\Services;

use App\Http\Requests\BudgetRequest;
use App\Models\{Budget, Product};
use Illuminate\Http\Request;

class BudgetService
{
    public function listBudget()
    {
        return Budget::all();
    }

    public function storeBudget(BudgetRequest $request, Budget $budget)
    {
        $budgetUpdated = $this->totalValueCalc($request->method(), $request, $budget);
        $budget->fill($budgetUpdated);

        return $budget->save();
    }

    public function updateBudget(BudgetRequest $request, Budget $budget)
    {
        return $this->CalcValueOnUpdate($request, $budget);
    }

    public function destroyBudget(Budget $budget)
    {
        return $budget->delete();
    }

    public function payStoreBudget(BudgetRequest $request, Budget $budget)
    {
        return $this->calcValueOnPay($request, $budget);
    }

    /*
     *
     *  Methods to calc budget and update values
     *
     *
     *
     * */

    public function totalValueCalc(string $method, Request $request, Budget $budget)
    {

        if ($method === 'POST') {
            $product = Product::find($request->product);

            $budgetRequest = $request->all() + [
                'total_value' => ($product->value * $request->quantity) + $request->additional,
                'pay'         => 0,
                'remnant'     => ($product->value * $request->quantity) + $request->additional,
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

        if($request->additional == $budget->additional) {

            $budget->fill($request->all());
            $budget->total_value = $this-> totalValueCalc($request->method(), $request, $budget);
            $budget->remnant     = $budget->total_value - $budget->pay;
            $budget->save();

            return redirect(route('budget.index'));

        };

        if($request->additional > $budget->additional) {

            $budget->fill($request->all());
            $budget->total_value = $budget -> totalValueCalc($request->method(), $request, $budget);
            $budget->remnant     = $budget->total_value - $budget->pay;
            $budget->save();

            return redirect(route('budget.index'));

        };

        $budget->fill($request->all());
        $budget->total_value = $budget -> totalValueCalc($request->method(), $request, $budget);
        $budget->remnant     = $budget->total_value - $budget->pay;

        if($budget->remnant < 0) {

            return redirect(route('budget.edit', $budget));
        };

        $budget->save();

        return redirect(route('budget.index'));

    }

    public function calcValueOnPay(Request $request, Budget $budget)
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

    public function returnCountBudgetPaidOut(): int
    {
        $budgets = Budget::all();

        $count = $budgets->filter(function ($item) {
            return $item->pay == $item-> total_value;
        });

        return $count->count();
    }


    public function returnCountBudgetNotPaidOut(): int
    {
        $budgets = Budget::all();

        $count = $budgets->filter(function ($item) {
            return $item->remnant == $item-> total_value;
        });

        return $count->count();
    }



    public function returnCountBudgetPartiallyPaidOut(): int
    {
        $budgets = Budget::all();

        $count = $budgets->filter(function ($item) {
            if ($item->pay > 0 && $item->pay < $item->total_value) {
                return $item;
            };

            return 0;
        });

        return $count->count();
    }
}
