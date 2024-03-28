<?php

namespace App\Http\Controllers;

use App\Services\BudgetService;

class DashboardController extends Controller
{
    public function index()
    {
        $totallyPaid   = (new BudgetService())->returnCountBudgetPaidOut();
        $partiallyPaid = (new BudgetService())->returnCountBudgetPartiallyPaidOut();

        return view('home')
            ->with(['totallyPaid' => $totallyPaid])
            ->with(['partiallyPaid' => $partiallyPaid]);
    }
    

}
