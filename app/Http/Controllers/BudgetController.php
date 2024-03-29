<?php

namespace App\Http\Controllers;

use App\Http\Requests\BudgetRequest;
use App\Models\{Budget, Product, Region};
use App\Services\BudgetService;

class BudgetController extends Controller
{
    public function index()
    {
        return view('budget.index')
            ->with('budgets', (new BudgetService())->listBudget());
    }

    public function create()
    {
        return view('budget.create')
            ->with('products', Product::all())
            ->with('regions', Region::all());
    }

    public function store(BudgetRequest $request, Budget $budget)
    {
        (new BudgetService())->storeBudget($request, $budget);

        return redirect(route('budget.index'));
    }

    public function show(Budget $budget)
    {
        return view('budget.show')
            ->with('budget', $budget);
    }

    public function edit(Budget $budget)
    {
        return view('budget.edit')
            ->with('budget', $budget)
            ->with('products', Product::all())
            ->with('regions', Region::all());
    }

    public function update(BudgetRequest $request, Budget $budget)
    {
        (new BudgetService())->updateBudget($request, $budget);

        return redirect(route('budget.index'));
    }

    public function destroy(Budget $budget)
    {
        (new BudgetService())->destroyBudget($budget);

        return redirect(route('budget.index'));
    }

    public function payCreate(Budget $budget)
    {
        return view('budget.pay')->with('budget', $budget);
    }

    public function payStore(BudgetRequest $request, Budget $budget)
    {
        (new BudgetService())->payStoreBudget($request, $budget);

        return redirect(route('budget.index'));
    }
}
