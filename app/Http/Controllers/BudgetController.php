<?php

namespace App\Http\Controllers;

use App\Http\Requests\BudgetRequest;
use App\Models\Budget;
use App\Models\Product;
use App\Models\Region;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\Factory;
use Illuminate\View\View;

class BudgetController extends Controller
{
    public function index()
    {
        $budgets = Budget::all();

        return view('budget.index')
            ->with('budgets', $budgets);
    }


    public function create()
    {
        $products = Product::all();
        $regions = Region::all();

        return view('budget.create')
            ->with('products', $products)
            ->with('regions', $regions);
    }


    public function store(BudgetRequest $request, Budget $budget)
    {
        $budgetUpdated = $budget->totalValueCalc($request->method(), $request,  $budget);
        $budget->fill($budgetUpdated);
        $budget->save();

        return redirect(route('budget.index'));
    }


    public function show(Budget $budget)
    {
        return view('budget.show')
            ->with('budget', $budget);
    }

    public function edit(Budget $budget)
    {
        $products = Product::all();
        $regions = Region::all();

        return view('budget.edit')
            ->with('budget', $budget)
            ->with('products', $products)
            ->with('regions', $regions);
    }

    public function update(BudgetRequest $request, Budget $budget)
    {
        $budget->CalcValueOnUpdate($request, $budget);
        return redirect(route('budget.index'));
    }

    public function destroy(Budget $budget)
    {
        $budget->delete();
        return redirect(route('budget.index'));
    }

    function payCreate(Budget $budget)
    {
        return view('budget.pay')->with('budget', $budget);
    }

    function payStore(BudgetRequest $request, Budget $budget)
    {
        $budget->CalcValueOnPay( $request, $budget);
        return redirect(route('budget.index'));
    }
}
