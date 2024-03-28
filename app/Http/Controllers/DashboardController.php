<?php

namespace App\Http\Controllers;

use App\Services\BudgetService;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
        return view('home')
            ->with(['totallyPaid'    => (new BudgetService())->returnCountBudgetPaidOut()])
            ->with(['partiallyPaid'  => (new BudgetService())->returnCountBudgetPartiallyPaidOut()])
            ->with(['notTotallyPaid' => (new BudgetService())->returnCountBudgetNotPaidOut()])
            ->with(['lastDate' => (new BudgetService())->lastBudgetDate()])
            ;
    }


}
