<?php

use App\Http\Controllers\BudgetController;
use App\Http\Controllers\RegionController;
use App\Http\Controllers\ProductController;
use App\Http\Model\Budget;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});

Route::resource('region', RegionController::class);

Route::resource('product', ProductController::class);

Route::resource('budget', BudgetController::class);

Route::get('/budget/{budget}/pay', [BudgetController::class, 'payCreate'])->name('payCreate');

Route::put('/budget/{budget}/pay', [BudgetController::class, 'payStore'])->name('payStore');
