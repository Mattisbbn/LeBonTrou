<?php

namespace App\Http\Controllers;

use App\Models\Currency;


class HomeController extends Controller
{
    public function index()
    {
        $price = round(Currency::all()->last()->price, 2);
        return view('pages.home.index', compact('price'));
    }
}
