<?php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TrouController;
use App\Http\Controllers\CurrencyController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CartController;


Route::get('/', [HomeController::class, 'index'])->name('home');


Route::get('/hlc', [CurrencyController::class, 'index'])->name('hlc');

Route::get('/products', [TrouController::class, 'index'])->name('products');
Route::get('/products/{id}', [TrouController::class, 'show'])->name('products.show');

Route::get('/api/hlc', action: [CurrencyController::class, 'getPrice']);

Route::get('/checkout/{id}', [CartController::class, 'index'])->name('checkout');

