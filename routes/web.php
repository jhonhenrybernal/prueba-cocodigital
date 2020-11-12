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

    Route::get('plans',[PlansController::class, 'sspMi'])->name('plans');
    Route::get('plans/select/{id}', [PlansController::class, 'planSelect'])->name('plans');


    Route::get('/plans/list', function () {
        return view('plans.list');
    })->name('plan.list');

    //forma uno
    Route::get('plans/list/ssp', [PlansController::class, 'sspList'])->name('plans.list.ssp');
    Route::post('/plans/add/', 'App\Http\Controllers\PlansController@add')->name('plan.add');

    Route::get('/client', function () {
        return view('client.index');
    })->name('client.index');

    //forma dos
    Route::get('/client/ssp/', 'App\Http\Controllers\ClientsController@sspList')->name('client.ssp');

});
