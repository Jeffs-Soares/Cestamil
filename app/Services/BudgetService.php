<?php

namespace App\Services;

use App\Http\Requests\BudgetRequest;
use App\Models\Budget;

class BudgetService
{

    public function list()
    {
        return Budget::all();

    }

    public function save(BudgetRequest $request, Budget $budget)
    {
        $budgetUpdated = $budget->totalValueCalc($request->method(), $request,  $budget);
        $budget->fill($budgetUpdated);
        return $budget->save();
    }

    public function update(BudgetRequest $request, Budget $budget)
    {
        return $budget->CalcValueOnUpdate($request, $budget);
    }

    public function delete(Budget $budget)
    {
        return $budget->delete();
    }

    public function payStore(BudgetRequest $request, Budget $budget)
    {
        return $budget->CalcValueOnPay( $request, $budget);
    }


}
