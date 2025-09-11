<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trou;
use App\Models\Shipment;

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

    public function index(Request $request, $id)
    {
        $shipmentId = $request->query('shipment_id');

        if (!$shipmentId) {
            return back()->withErrors(['shipment_id' => 'Veuillez choisir une option de livraison']);
        }
    
        $trou = Trou::findOrFail($id);
        $shipment = Shipment::findOrFail($shipmentId);

        $price = \App\Models\Currency::latest()->first()->price;
        $calculatedPrice = ($trou->volume + $trou->depth / $trou->diameter) ;
        $calculatedPrice = round($calculatedPrice, 2);
    
        // Ici tu peux stocker dans ton panier ou passer à la vue checkout
        // Exemple :
        return view('pages.cart.index', [
            'trou' => $trou,
            'shipment' => $shipment,
            'calculatedPrice' => $calculatedPrice,
        ]);
    }
}
