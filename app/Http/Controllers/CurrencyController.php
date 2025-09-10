<?php

namespace App\Http\Controllers;

use App\Models\Wind;
use Illuminate\Http\Request;

class CurrencyController extends Controller
{
    public function getPrice()
    {
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
        })->sortBy('timestamp')->values();






        return response()->json([
          'priceHistory' => $priceHistory,
          'price' => $currentPrice
        ]);
    }
}
