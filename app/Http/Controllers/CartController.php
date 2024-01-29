<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Darryldecode\Cart\Facades\CartFacade as Cart;

class CartController extends Controller
{
    public function getCart()
    {
        $cart = Cart::getContent();
        $totalPrice = Cart::getTotal();
        // dd($items);
        return view('frontoffice/checkout', compact('cart', 'totalPrice'));
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

        return redirect()->route('loja.cart')->with('success', 'Foi adicionado um novo artigo ao seu carrinho!');
    }

    public function removeCart(Request $request)
    {
        Cart::remove($request->id);
        return redirect()->route('loja.cart')->with('success', 'Artigo removido do carrinho com sucesso!');
    }

    public function updateCart(Request $request)
    {
        Cart::update($request->id, [
            'quantity' => [
                'relative' => false,
                'value' => $request->quantity
            ]
        ]);
        return redirect()->route('loja.cart')->with('success', 'Artigo do carrinho atualizado com sucesso!');
    }

    public function cleanCart(Request $request)
    {
        Cart::clear();
        return redirect()->route('loja.cart')->with('info', 'O carrinho ficou vazio!');
    }
}
