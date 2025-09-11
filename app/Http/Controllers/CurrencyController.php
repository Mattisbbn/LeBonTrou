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
                'price' => $item->price,
                'timestamp' => $item->created_at
            ];
        })->sortBy('timestamp')->values();


        return response()->json([
          'priceHistory' => $priceHistory
        ]);
    }
}
