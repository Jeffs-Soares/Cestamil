<?php

namespace App\Http\Controllers;

use App\Http\Model\Budget;
use App\Http\Model\Product;
use App\Http\Model\Region;
use App\Traits\BudgetTrait;
use Illuminate\Http\Request;


class BudgetController extends Controller
{
    use BudgetTrait;

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
        $budgetUpdated = $this->calcTotalValue($request, $budget);
   
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
        $product = Product::find($request->product);

        $budget->fill($request->all());
        $budget->total_value = ($product->value * $request->quantity ) + $request->additional;
        $budget->save();

        return redirect(route('budget.index'));
    }

    public function destroy(Budget $budget)
    {
        $budget->delete();
        return redirect(route('budget.index'));
    }

}
