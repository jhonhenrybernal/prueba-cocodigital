<?php

use App\Http\Controllers\PlansController;
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
    return redirect()->route('login');
});

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('plans.index');
    })->name('dashboard');

    Route::get('plans',[PlansController::class, 'sspPlans'])->name('plans');
    Route::get('plans/select/{id}', [PlansController::class, 'planSelect'])->name('plans');


    Route::get('/plans/list', function () {
        return view('plans.list');
    })->name('plan.list');
});
