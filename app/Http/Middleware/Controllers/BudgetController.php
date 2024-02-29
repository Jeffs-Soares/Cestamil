<?php

namespace App\Http\Middleware\Controllers;

use App\Http\Model\Budget;
use App\Http\Model\Product;
use App\Http\Model\Region;
use Illuminate\Http\Request;

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


    public function store(Request $request, Budget $budget)
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

    public function update(Request $request, Budget $budget)
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

    function payStore(Request $request, Budget $budget)
    {
        $budget->CalcValueOnPay( $request, $budget);
        return redirect(route('budget.index'));
    }
}
