<?php

use App\Http\Controllers\{BudgetController, ProductController, RegionController};
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::resource('region', RegionController::class);

Route::resource('product', ProductController::class);

Route::resource('budget', BudgetController::class);

Route::get('/budget/{budget}/pay', [BudgetController::class, 'payCreate'])->name('payCreate');

Route::put('/budget/{budget}/pay', [BudgetController::class, 'payStore'])->name('payStore');
