<?php

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
    return view('welcome');
});



Auth::routes();


Route::get('/home', [App\Http\Controllers\ProductsController::class, 'index'])->name('home');
Route::get('/product/{id}', [App\Http\Controllers\ProductsController::class, 'show'])->name('show');


Route::get('/payment/{string}/{price}', [App\Http\Controllers\PaymentController::class, 'charge'])->name('goToPayment');
Route::post('payment/process-payment/{string}/{price}', [App\Http\Controllers\PaymentController::class, 'processPayment'])->name('processPayment');
