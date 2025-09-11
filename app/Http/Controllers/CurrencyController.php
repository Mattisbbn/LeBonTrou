<?php

namespace App\Http\Controllers;

use App\Models\Currency;
use Illuminate\Http\Request;
use Carbon\Carbon;

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


    public function index(){


        $price = Currency::latest()->first()->price;



        $twentyFourHoursAgo = Carbon::now()->subHours(24);

        $baseline = Currency::where('created_at', '<=', $twentyFourHoursAgo)
            ->orderBy('created_at', 'desc')
            ->first();

        if (!$baseline) {
            $baseline = Currency::oldest()->first();
        }

        if ($price && $baseline && (float) $baseline->price !== 0.0) {
            $change = (($price - $baseline->price) / $baseline->price) * 100;
            $percentage24h = number_format($change, 2) . '%';
        } else {
            $percentage24h = '0.00%';
        }

        return view('pages.hlc.index', compact('price', 'percentage24h'));
    }
}
