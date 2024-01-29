@extends('layouts.frontoffice')

@section('content')


      <!-- ........ -->
      <!-- Checkout -->
      <!-- ........ -->
      <h1 class="product-card_tit">Checkout</h1>


        @if($cart->count() == 0)
        
        <div class="alert alert-info" role="alert">
          O seu carrinho está vazio
        </div>

        @else

        <div class="tab_container">
          <input id="tab1" type="radio" name="tabs" checked>
          <label for="tab1"><span class="numberCircle">1</span><span>Carrinho</span></label>
  
          <input id="tab2" type="radio" name="tabs">
          <label for="tab2"><span class="numberCircle">2</span><span>Informações do cliente</span></label>
  
          <input id="tab3" type="radio" name="tabs">
          <label for="tab3"><span class="numberCircle">3</span><span>Expedição</span></label>
  
          <input id="tab4" type="radio" name="tabs">
          <label for="tab4"><span class="numberCircle">4</span><span>Pagamentos</span></label>

        <section id="content1" class="tab-content">
          <h3>Itens do carrinho  <a href="{{route('loja.cleanCart')}}" class="btn btn-primary btn-sm"><i class="material-icons">Limpar?</i></a></h3>


          @if ($msg = Session::get('success'))
            <div class="alert alert-success" role="alert">
              {{$msg}}
            </div>
          @endif
          @if ($msg = Session::get('info'))
            <div class="alert alert-info" role="alert">
              {{$msg}}
            </div>
          @endif
          <form action="" method="post">
                  
            <table class="table table-striped">
              <thead>
                <tr>
                    <th></th>
                    <th>Nome</th>
                    <th>Preço</th>
                    <th>Quantidade</th>
                    <th>Ações</th>
                </tr>
              </thead>

              <tbody>
                @foreach ($cart as $c)
                <tr>
                  <td><img src="{{ asset('assets/' . $c->attributes->image) }}" width="70" class="responsive-img circle"></td>
                  <td>{{$c->name}}</td>
                  <td>{{$c->price}}</td>
                  {{-- UPDATE --}}
                  <form action="{{route('loja.updateCart')}}" method="POST" enctype="multipart/form-data">
                  <td width="20%"><input type="number" name="quantity" value="{{$c->quantity}}" class="form-control mr-2 quantity-input"></td>
                  <td width="20%">
                      @csrf
                      <input type="hidden" name="id" value="{{$c->id}}">
                      <button class="btn-floating waves-effect waves-light red">Atualizar</button>
                  </form>
                  {{-- REMOVE --}}
                    <form action="{{route('loja.removeCart')}}" method="POST" enctype="multipart/form-data">
                      @csrf
                      <input type="hidden" name="id" value="{{$c->id}}">
                      <button class="btn-floating waves-effect waves-light red"><i class="material-icons">Limpar</i></button>
                    </form>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
            
            <div class="button-master-container">
              <div class="button-container"><a href={{ route('loja.index') }}>Voltar às compras</a>
              </div>
              <div class="button-container button-finish"><a href="#">Finalizar pedido</a>
              </div>
            </div>
          </form>
        </section>




        <section id="content2" class="tab-content">
          <h3>Informações do cliente</h3>
          <p></p>
        </section>

        <section id="content3" class="tab-content">
          <h3>Expedição</h3>
          <p></p>
        </section>

        <section id="content4" class="tab-content">
          <h4 class="payment-title">Escolha o seu método de pagamento</h4>
          <form action="{{route('loja.addOrder')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="pymt-radio">


              <div class="row-payment-method payment-row">
                <div class="select-icon">
                  <input type="radio" id="radio1" name="radios" value="paypal">
                  <label for="radio1"></label>
                </div>
                <div class="select-txt">
                  <p class="pymt-type-name">Paypal</p>
                  <p class="pymt-type-desc">Pagamento seguro em linha. É necessário um cartão de crédito. Não é necessária uma conta PayPal.</p>
                </div>
                <div class="select-logo">
                  <img src="{{ asset('assets/png/logo-paypal.png') }}" alt="PayPal"/>
                </div>

              </div>

            </div>
            <div class="pymt-radio">

              <div class="row-payment-method payment-row-last">
                <div class="select-icon hr">
                  <input type="radio" id="radio2" name="radios" value="creditCard" checked>
                  <label for="radio2"></label>
                </div>
                <div class="select-txt hr">
                  <p class="pymt-type-name">Cartão de crédito</p>
                  <p class="pymt-type-desc">Transferência segura de dinheiro utilizando a sua conta bancária. Pagamento seguro online. Cartão de crédito necessário. Visa, Maestro, Discover, American Express.</p>                
                </div>
                <div class="select-logo">
                  <div class="select-logo-sub logo-spacer">
                    <img src="{{ asset('assets/png/logo-visa.png') }}" alt="Visa"/>
                  </div>
                  <div class="select-logo-sub">
                    <img src="{{ asset('assets/png/logo-mastercard.png') }}" alt="MasterCard"/></div>
                </div>

              </div>
            </div>
            <div class="form-cc">
              
                    @foreach ($cart as $c)
                      <input type="hidden" name="orderId" value="{{$c->id}}">
                      <input type="hidden" name="name" value="{{$c->name}}">
                      <input type="hidden" name="price" value="{{$c->price}}">
                      
                    @endforeach
                
                <div class="button-master-container">
                  <div class="button-container"><a href={{ route('loja.index') }}>Voltar às compras</a>
                  </div>
                  <div class="button-container button-finish"><button name="action">Finalizar pedido</button>
                  </div>
                </div>
              </form>
        </section>
        
      </div>
      @endif
      <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-9223039768533617"
     crossorigin="anonymous"></script>
<!-- teste -->
<ins class="adsbygoogle"
     style="display:inline-block;width:1100px;height:90px"
     data-ad-client="ca-pub-9223039768533617"
     data-ad-slot="3834281108"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>



@endsection