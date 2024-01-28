<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Darryldecode\Cart\Facades\CartFacade as Cart;

class CartController extends Controller
{
    public function getCart()
    {
        $items = Cart::getContent();
        // dd($items);
        return view('frontoffice/checkout', compact('items'));
    }

    public function addCart(Request $request)
    {
        Cart::add([
            'id' => $request->id,
            'name' => $request->name,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'attributes' => [
                'image' => $request->image
            ]
        ]);

        return redirect()->route('loja.cart')->with('sucesso', 'Producto adicionado ao carrinho com sucesso');
    }
}
