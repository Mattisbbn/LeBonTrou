<?php

use Illuminate\Support\Facades\Route;
use App\Models\Wind;

Route::get('/', function () {
    return view('pages.home.index');
})->name('home');


Route::get('/hlc', function () {
    return view('pages.hlc.index');
})->name('hlc');


Route::get('/api/hlc', function () {

    // Fonction pour calculer le prix basé sur la vitesse du vent
    $getPrice = function ($speed, $timestamp) {
        $price = 923 * $speed;
        $price /= 7;
        $price /= 150;
        return [
            'price' => round($price, 2),
            'timestamp' => $timestamp
        ];
    };

    $data = Wind::all();
    $currentSpeed = $data->last()->speed;
    $currentPrice = $getPrice($currentSpeed,$data->last()->timestamp);

    $priceHistory = $data->map(function (Wind $item) use ($getPrice) {
        return $getPrice($item->speed,$item->timestamp);
    });






    return response()->json([
      'priceHistory' => $priceHistory,
      'price' => $currentPrice
    ]);
});
