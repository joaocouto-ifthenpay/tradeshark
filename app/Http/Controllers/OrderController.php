<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Darryldecode\Cart\Facades\CartFacade as Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class OrderController extends Controller
{
    public function __construct()
    {
        // Adiciona o middleware 'auth' a todas as rotas do controlador
        $this->middleware('auth.check');
    }

    public function addOrder(Request $request)
    {
        if ($request->has('action') && $request->input('radios') === 'creditCard') {

            $payload = [
                'orderId' => $request->orderId,
                'price' => $request->price,
            ];

            $this->processPayment($payload);

            return redirect()->route('loja.orderConfirmation')->with('success', 'O seu pagamento através de Cartão de Crédito foi realizado com sucesso!');
        } else {
            return redirect()->route('loja.orderConfirmation')->with('error', ' Ocorreu um erro enquanto finalizava a encomenda');
        }
    }

    private function processPayment($payload)
    {
        $requestBody = [
            "orderId" => $payload['orderId'],
            "amount" => $payload['price'], // Usa a variável $payload como valor do amount
            "successUrl" => "http://127.0.0.1:8000/order/confirmation?status=success",
            "errorUrl" => "http://127.0.0.1:8000/order/confirmation?status=error",
            "cancelUrl" => "http://127.0.0.1:8000/order/confirmation?status=cancel",
            "language" => "pt"
        ];

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://ifthenpay.com/api/creditcard/init/' . env('CCARD_KEY'),
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => json_encode($requestBody),
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json',
                'Cookie: ARRAffinity=57d5258c349103c74d104ee6315d37036a8c6af8b0f5efa690b26d2a1fdd2129; ARRAffinitySameSite=57d5258c349103c74d104ee6315d37036a8c6af8b0f5efa690b26d2a1fdd2129; ASP.NET_SessionId=kwsscufkx4qrmpasm0rrldlz'
            ),
        ));

        $response = curl_exec($curl);
        curl_close($curl);

        $data = json_decode($response, true);

        if ($data['Message'] === 'Success') {
            // Verifica se o status é "0" (transação bem-sucedida)
            if ($data['Status'] === '0') {
                // Aqui você pode redirecionar o usuário para a URL de pagamento
                $paymentUrl = $data['PaymentUrl'];
                header('Location: ' . $paymentUrl);
                exit;

                // return redirect($paymentUrl);
            } else {
                return redirect()->route('loja.orderConfirmation')->with('error', ' Ocorreu um erro enquanto finalizava a encomenda');
            }
        } else {
            // Se a mensagem não for bem-sucedida, houve um erro na resposta
            // Você pode tratar isso conforme necessário
            // Por exemplo, exibindo uma mensagem genérica de erro para o usuário
            return redirect()->route('loja.orderConfirmation')->with('error', ' Ocorreu um erro enquanto finalizava a encomenda');
        }
    }


    private function orderConfirmation(Request $request)
    {
        $status = $request->query('status');

        if ($status === 'success') {
            return redirect()->route('loja.orderConfirmation')->with('success', 'O pagamento ocorreu com sucesso!');
        } elseif ($status === 'error') {
            return redirect()->back()->with('error', 'Ocorreu um erro ao processar o pagamento. Por favor, tente novamente mais tarde.');
        } elseif ($status === 'cancel') {
            return redirect()->back()->with('info', 'O pagamento foi cancelado.');
        } else {
            return redirect()->back()->with('error', 'Ocorreu um problema ao processar o pagamento. Por favor, entre em contato com o suporte.');
        }
    }


    // public function complete(Request $request)
    // {
    //     $orderId = $request->input('orderId');
    //     $userId = Auth::id();

    //     $orderCheck = Order::where([
    //         'orderId' => $orderId,
    //         'userId' => $userId,
    //         'status' => 'PENDING',
    //     ])->exists();

    //     if (!$orderCheck) {
    //         $request->session()->flash('error', 'Encomenda não foi encontrada!');
    //         return redirect()->route('loja.index');
    //     }


    //     return redirect()->route('loja.cart')->with('info', 'O carrinho ficou vazio!');
    // }

    // public function orders()
    // {
    //     $orders = Order::where([
    //         // 'status' => 'PENDING',
    //         'userId' => Auth::id()
    //     ])->orderBy('created_at', 'desc')->get();

    //     return $orders;
    // }
}
