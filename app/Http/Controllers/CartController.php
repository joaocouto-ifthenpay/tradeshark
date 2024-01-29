<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Darryldecode\Cart\Facades\CartFacade as Cart;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function __construct()
    {
        // Adiciona o middleware 'auth' a todas as rotas do controlador
        $this->middleware('auth.check');
    }

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

        if ($request->has('action') && $request->input('action') === 'buy-now') {
            return redirect()->route('loja.cart')->with('success', 'Foi adicionado um novo artigo ao seu carrinho!');
        } else {
            return redirect()->route('loja.details', ['id' => $request->input('id')])->with('success', 'Foi adicionado um novo artigo ao seu carrinho!');
        }
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


    public function complete(Request $request)
    {
        $orderId = $request->input('orderId');
        $userId = Auth::id();

        $orderCheck = Order::where([
            'orderId' => $orderId,
            'userId' => $userId,
            'status' => 'PENDING',
        ])->exists();

        if (!$orderCheck) {
            $request->session()->flash('error', 'Encomenda não foi encontrada!');
            return redirect()->route('loja.index');
        }


        return redirect()->route('loja.cart')->with('info', 'O carrinho ficou vazio!');
    }

    public function orders()
    {
        $orders = Order::where([
            // 'status' => 'PENDING',
            'userId' => Auth::id()
        ])->orderBy('created_at', 'desc')->get();

        return $orders;
    }
}
