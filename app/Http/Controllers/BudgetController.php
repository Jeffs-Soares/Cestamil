<?php

namespace App\Http\Controllers;

use App\Http\Requests\BudgetRequest;
use App\Models\Budget;
use App\Models\Product;
use App\Models\Region;
use App\Services\BudgetService;


class BudgetController extends Controller
{
    public function index()
    {
        $budgets = (new BudgetService())->list();

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
        (new BudgetService())->save($request, $budget);
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
        (new BudgetService())->update($request, $budget);
        return redirect(route('budget.index'));
    }

    public function destroy(Budget $budget)
    {
        (new BudgetService())->delete($budget);
        return redirect(route('budget.index'));
    }

    function payCreate(Budget $budget)
    {
        return view('budget.pay')->with('budget', $budget);
    }

    function payStore(BudgetRequest $request, Budget $budget)
    {
        (new BudgetService())->payStore($request, $budget);
        return redirect(route('budget.index'));
    }
}
