<?php

use App\Http\Controllers\BudgetController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegionController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});




Route::resource('region', RegionController::class)->middleware('auth');

Route::resource('product', ProductController::class)->middleware('auth');

Route::resource('budget', BudgetController::class)->middleware('auth');

Route::get('/budget/{budget}/pay', [BudgetController::class, 'payCreate'])->name('payCreate')->middleware('auth');

Route::put('/budget/{budget}/pay', [BudgetController::class, 'payStore'])->name('payStore')->middleware('auth');


require __DIR__.'/auth.php';
