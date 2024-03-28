<?php

namespace App\Http\Controllers;

use App\Services\BudgetService;

class DashboardController extends Controller
{
    public function index()
    {
        $totallyPaid    = (new BudgetService())->returnCountBudgetPaidOut();
        $partiallyPaid  = (new BudgetService())->returnCountBudgetPartiallyPaidOut();
        $notTotallyPaid = (new BudgetService())->returnCountBudgetNotPaidOut();
        $lastDate       = (new BudgetService())->lastBudgetDate();

        return view('home')
            ->with(['totallyPaid'    => $totallyPaid])
            ->with(['partiallyPaid'  => $partiallyPaid])
            ->with(['notTotallyPaid' => $notTotallyPaid])
            ->with(['lastDate' => $lastDate->date]);
    }


}
