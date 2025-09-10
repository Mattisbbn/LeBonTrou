<?php

namespace App\Http\Controllers;

use App\Models\Trou; 

class TrouController extends Controller
{
    public function index()
    {
        $trous = Trou::with('images', 'category')->get();

        return view('pages.products.index', compact('trous'));
    }
}
