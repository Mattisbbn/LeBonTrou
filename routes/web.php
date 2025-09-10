<?php

use Illuminate\Support\Facades\Route;
use App\Models\Wind;
use App\Http\Controllers\TrouController;

Route::get('/', function () {
    return view('pages.home.index');
});


Route::get('/hlc', function () {
    return view('pages.hlc.index');
});

Route::get('/products', [TrouController::class, 'index']);


Route::get('/api/hlc', function () {

    // Fonction pour calculer le prix basé sur la vitesse du vent
    $getPrice = function ($speed) {
        $price = 923 * $speed;
        $price /= 7;
        $price /= 150;
        return $price;
    };

    $data = Wind::all();
    $currentSpeed = $data->last()->speed;
    $currentPrice = $getPrice($currentSpeed);

    $priceHistory = $data->map(function (Wind $item) use ($getPrice) {
        return $getPrice($item->speed);
    });






    return response()->json([
      'priceHistory' => $priceHistory,
      'price' => $currentPrice
    ]);
});
