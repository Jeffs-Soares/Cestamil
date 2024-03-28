<?php

namespace App\Http\Controllers;


use App\Services\BudgetService;

class DashboardController extends Controller
{
    public function index()
    {
        $qtd = (new BudgetService())->returnCountBudgetPaidOut();

        return view('home')->with(['qtd' => $qtd]);
    }

}
