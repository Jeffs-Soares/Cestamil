<?php

namespace App\Http\Controllers;

use App\Http\Model\Budget;
use Illuminate\Http\Request;

class BudgetController extends Controller
{

    public function index()
    {
        $budgets = Budget::all();
        return view('budget.index')->with('budgets', $budgets);
    }


    public function create()
    {

    }


    public function store(Request $request)
    {

    }


    public function show(Budget $budget)
    {

    }


    public function edit(Budget $budget)
    {

    }


    public function update(Request $request, Budget $budget)
    {

    }


    public function destroy(Budget $budget)
    {

    }
}
