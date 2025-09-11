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

    public function show($id)
    {
        $trou = Trou::with('images', 'category')->findOrFail($id);

        return view('pages.products.show', compact('trou'));
    }
}
