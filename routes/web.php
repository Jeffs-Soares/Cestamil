<?php

use App\Http\Controllers\{BudgetController, ProductController, RegionController};
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('login');
});

Route::resource('region', RegionController::class);

Route::resource('product', ProductController::class);

Route::resource('budget', BudgetController::class);

Route::get('/budget/{budget}/pay', [BudgetController::class, 'payCreate'])->name('payCreate');

Route::put('/budget/{budget}/pay', [BudgetController::class, 'payStore'])->name('payStore');
