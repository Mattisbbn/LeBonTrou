<?php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TrouController;
use App\Http\Controllers\CurrencyController;

Route::get('/', function () {
    return view('pages.home.index');
})->name('home');


Route::get('/hlc', function () {
    return view('pages.hlc.index');
})->name('hlc');

Route::get('/products', [TrouController::class, 'index'])->name('products');
Route::get('/products/{id}', [TrouController::class, 'show'])->name('products.show');




Route::get('/api/hlc', [CurrencyController::class, 'getPrice']);
