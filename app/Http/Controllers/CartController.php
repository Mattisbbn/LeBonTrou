<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trou;

class CartController extends Controller
{
    public function add(Request $request, Trou $trou)
    {
        // Ici tu ajoutes le produit au panier
        $cart = session()->get('cart', []);

        // Vérifie si le produit est déjà dans le panier
        if(isset($cart[$trou->id])) {
            $cart[$trou->id]['quantity']++;
        } else {
            $cart[$trou->id] = [
                'name' => $trou->name,
                'price' => $trou->price,
                'quantity' => 1,
                'image' => $trou->image
            ];
        }

        session()->put('cart', $cart);

        // Redirige vers le récapitulatif
        return redirect()->route('cart.index');
    }

    public function index($id)
    {
        $trou = Trou::findOrFail($id);


        return view('pages.cart.index', compact('trou'));
    }
}
