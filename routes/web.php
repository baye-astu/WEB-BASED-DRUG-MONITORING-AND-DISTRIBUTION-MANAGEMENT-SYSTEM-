<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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
    return view('welcome');
});


Auth::routes();


Route::resource('search', App\Http\Controllers\SearchController::class);

Route::resource('epsa', App\Http\Controllers\EpsaController::class)->middleware('epsa');
Route::resource('fstock', App\Http\Controllers\FStockController::class);
Route::resource('hrequest', App\Http\Controllers\HRequestController::class);
Route::resource('request', App\Http\Controllers\FRequestController::class);
Route::resource('sell', App\Http\Controllers\SellController::class);
Route::resource('hub', App\Http\Controllers\HubsController::class);
Route::resource('epsa2', App\Http\Controllers\Epsa2Controller::class)->middleware('epsa2');
Route::resource('epsa3', App\Http\Controllers\Epsa3Controller::class)->middleware('epsa3');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
