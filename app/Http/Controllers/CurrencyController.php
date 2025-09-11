<?php

namespace App\Http\Controllers;

use App\Models\Currency;
use Illuminate\Http\Request;

class CurrencyController extends Controller
{
    public function getPrice()
    {
        $data = Currency::all();

        $priceHistory = $data->map(function (Currency $item) {
            return [
                'price' => round($item->price, 2),
                'timestamp' => $item->created_at->format('Y-m-d H:i')
            ];
        })->sortBy('timestamp')->values();


        return response()->json([
          'priceHistory' => $priceHistory
        ]);
    }
}
