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

            // $this->processPayment($payload);
            // die('FIM2');
            return redirect()->route('loja.orderConfirmation')->with('success', 'O seu pagamento através de Cartão de Crédito foi realizado com sucesso!');
        } else {
            return redirect()->route('loja.orderConfirmation', ['id' => $request->input('id')])->with('error', ' Ocorreu um erro enquanto finalizava a encomenda');
        }
        dd($request->input('radios'));
        // var_dump($request->input('radios'));

        // var_dump($request->price);

        // die();
        // Cart::add([
        //     'id' => $request->id,
        //     'name' => $request->name,
        //     'price' => $request->price,
        //     'quantity' => $request->quantity,
        //     'attributes' => [
        //         'image' => $request->image
        //     ]
        // ]);

        // if ($request->has('action') && $request->input('action') === 'buy-now') {
        //     return redirect()->route('loja.cart')->with('success', 'Foi adicionado um novo artigo ao seu carrinho!');
        // } else {
        //     return redirect()->route('loja.details', ['id' => $request->input('id')])->with('success', 'Foi adicionado um novo artigo ao seu carrinho!');
        // }
    }


    // private function processPayment($payload)
    // {
    //     // $data = [
    //     //     "orderId" => 'order_' . $payload['orderId'],
    //     //     "amount" => $payload['price'],
    //     //     "successUrl" => "http://127.0.0.1:8000/order/confirmation?status=success",
    //     //     "errorUrl" => "http://127.0.0.1:8000/order/confirmation?status=error",
    //     //     "cancelUrl" => "http://127.0.0.1:8000/order/confirmation?status=cancel",
    //     //     "language" => "pt"
    //     // ];
    //     // echo '<pre>';
    //     // var_dump($data);
    //     // die();
    //     // $ch = curl_init('https://ifthenpay.com/api/creditcard/init/AAA-000000');

    //     // $options = [
    //     //     CURLOPT_RETURNTRANSFER => true,
    //     //     CURLOPT_CUSTOMREQUEST => 'POST',
    //     //     CURLOPT_HTTPHEADER => ['Content-Type: application/json'],
    //     // ];

    //     // // Verifica se há payload antes de adicionar CURLOPT_POSTFIELDS
    //     // if (!empty($data)) {
    //     //     $options[CURLOPT_POSTFIELDS] = http_build_query($data);
    //     // }

    //     // curl_setopt_array($ch, $options);

    //     // $response = curl_exec($ch);
    //     // $httpStatus = curl_getinfo($ch, CURLINFO_HTTP_CODE);

    //     // if (curl_errno($ch)) {
    //     //     throw new \Exception('cURL Error: ' . curl_error($ch));
    //     // }

    //     // curl_close($ch);

    //     $url = 'https://ifthenpay.com/api/creditcard/init/AAA-000000';
    //     $data = [
    //         "orderId" => 'order_45678',
    //         "amount" =>  "11.55",
    //         // "successUrl" => "https://127.0.0.1:8000/order/confirmation?status=success",
    //         // "errorUrl" => "https://127.0.0.1:8000/order/confirmation?status=error",
    //         // "cancelUrl" => "https://127.0.0.1:8000/order/confirmation?status=cancel",
    //         "successUrl" => "https://ifthenpay.com/",
    //         "errorUrl" => "https://ifthenpay.com/",
    //         "cancelUrl" => "https://ifthenpay.com/",
    //         "language" => "pt"
    //     ];
    //     // echo '<pre>';
    //     // var_dump($data);
    //     // die();
    //     $curl = curl_init();
    //     curl_setopt_array($curl, [
    //         CURLOPT_URL => $url,
    //         CURLOPT_RETURNTRANSFER => true,
    //         CURLOPT_ENCODING => '',
    //         CURLOPT_MAXREDIRS => 10,
    //         CURLOPT_TIMEOUT => 0,
    //         CURLOPT_FOLLOWLOCATION => true,
    //         CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    //         CURLOPT_CUSTOMREQUEST => 'POST',
    //         CURLOPT_POSTFIELDS => http_build_query($data), // Transforma os dados do corpo em uma string de consulta
    //     ]);

    //     $response = curl_exec($curl);

    //     if (curl_errno($curl)) {
    //         $errorMessage = curl_error($curl);
    //     }
    //     echo '<pre>';
    //     var_dump($errorMessage ?? null);
    //     var_dump($response);
    //     die();

    //     curl_close($curl);

    //     if ($response) {
    //         // Faça algo com a resposta, se necessário
    //     }




    //     // Verifica se a requisição foi bem-sucedida
    //     if ($response->successful()) {

    //         die('aqui 0');
    //         // A resposta foi bem-sucedida, você pode acessar os dados da resposta assim:
    //         $responseData = $response->json(); // Se a resposta for JSON
    //         // Ou você pode usar $response->body() para acessar o corpo da resposta diretamente


    //         $data = json_decode($responseData, true);

    //         if ($data['Status'] == '0') {
    //             // Se o status for "0" (sucesso), redirecionar o usuário para a URL de pagamento
    //             // return redirect($data['PaymentUrl']);
    //             var_dump($data['PaymentUrl']);
    //             die();
    //             return redirect($data['PaymentUrl']);
    //         } else {
    //             // Se o status for diferente de "0", houve um erro, você pode manipulá-lo conforme necessário
    //             $errorMessage = $data['Message'];
    //             // Por exemplo, você pode redirecionar o usuário de volta com uma mensagem de erro
    //             return redirect()->back()->with('error', $errorMessage);
    //         }
    //     } else {
    //         // A requisição falhou
    //         $statusCode = $response->status(); // Obter o código de status da resposta
    //         $errorMessage = $response->body(); // Obter a mensagem de erro, se houver
    //     }
    // }


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
