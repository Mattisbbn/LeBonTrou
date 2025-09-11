<?php

namespace App\Http\Controllers;

use App\Models\Trou; 
use Illuminate\Http\Request;

class TrouController extends Controller
{
    public function index(Request $request)
    {
        $query = Trou::with('images', 'category', 'shipments');
    
        if ($request->filled('q')) {
            $q = $request->input('q');
            $query->where('name', 'like', "%{$q}%")
                  ->orWhere('description', 'like', "%{$q}%");
        }
    
        $trous = $query->get();
    
        return view('pages.products.index', compact('trous'));
    }   
    
    public function show($id)
    {
        $trou = Trou::with('images', 'category', 'shipments')->findOrFail($id);

        return view('pages.products.show', compact('trou'));
    }

}
