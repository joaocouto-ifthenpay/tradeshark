@extends('layouts.frontoffice')

@section('content')


      <!-- ........ -->
      <!-- Checkout -->
      <!-- ........ -->
      <h1 class="product-card_tit">Checkout</h1>
      <div class="tab_container">
        <input id="tab1" type="radio" name="tabs">
        <label for="tab1"><span class="numberCircle">1</span><span>Carrinho</span></label>

        <input id="tab2" type="radio" name="tabs">
        <label for="tab2"><span class="numberCircle">2</span><span>Informações do cliente</span></label>

        <input id="tab3" type="radio" name="tabs">
        <label for="tab3"><span class="numberCircle">3</span><span>Expedição</span></label>

        <input id="tab4" type="radio" name="tabs" checked>
        <label for="tab4"><span class="numberCircle">4</span><span>Pagamentos</span></label>


        <section id="content1" class="tab-content">
          <h3>Itens do carrinho ({{$items->count()}} itens)</h3>
          {{-- <p>
            
            <div>
              <div class="shopping-cart-header">
                <i class="fa fa-shopping-cart cart-icon"></i>
                <div class="shopping-cart-total">
                  <span class="lighter-text">Total:</span>
                  <span class="main-color-text">2.229,97€</span>
                </div>
              </div> <!--end shopping-cart-header -->
          
              <ul class="shopping-cart-items">
                <li class="clearfix">
                  <img src="assets/PANEL_FACHADA_FIJACIONES_OCULTAS.png" alt="item1" />
                  <span class="item-name">Pav. Flutuante</span>
                  <span class="item-price">849,99€</span>
                  <span class="item-quantity">Quantidade: 01</span>
                </li>
          
                <li class="clearfix">
                  <img src="assets/Tinta-Plastica-Supercryl-1.png" alt="item1" />
                  <span class="item-name">Tintas de cor</span>
                  <span class="item-price">1.249,99€</span>
                  <span class="item-quantity">Quantidade: 01</span>
                </li>
          
                <li class="clearfix">
                  <img src="assets/cimento-cimpor.png" alt="item1" />
                  <span class="item-name">Cimento</span>
                  <span class="item-price">129,99€</span>
                  <span class="item-quantity">Quantidade: 01</span>
                </li>
              </ul>
          
              <a href={{ route('checkout') }} class="button">Avançar</a>
            </div> <!--end shopping-cart -->
          </p> --}}


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
                @foreach ($items as $item)
                <tr>
                  <td><img src="{{ asset('assets/' . $item->attributes->image) }}" width="70" class="responsive-img circle"></td>
                  <td>{{$item->name}}</td>
                  <td>{{$item->price}}</td>
                  <td><input type="number" name="quantity" value="{{$item->quantity}}"></td>
                  <td>
                    <button class="btn-floating waves-effect waves-light red"><i class="material-icons">refresh</i></button>
                    <button class="btn-floating waves-effect waves-light red"><i class="material-icons">delete</i></button>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
            
            {{-- <div class="pymt-radio">


              <div class="row-payment-method payment-row">
                <div class="select-icon">
                  <input type="radio" id="radio1" name="radios" value="pp">
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
                  <input type="radio" id="radio2" name="radios" value="pp" checked>
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
              <div class="row-cc">
                <div class="cc-field">
                  <div class="cc-title">Número do cartão de crédito
                  </div>
                  <input type="text" class="input cc-txt text-validated" value="4542 9931 9292 2293" />
                </div>
              </div>
              <div class="row-cc">
                <div class="cc-field">
                  <div class="cc-title">Data de validade
                  </div>
                  <select class="input cc-ddl">
                    <option selected>01</option>
                    <option>02</option>
                    <option>03</option>
                    <option>12</option>          
                  </select>
                  <select class="input cc-ddl">
                    <option>01</option>
                    <option>02</option>
                    <option>30</option>
                    <option>31</option>            
                  </select>
                </div>
                <div class="cc-field">
                  <div class="cc-title">CVV<span class="numberCircle">?</span>
                  </div>
                  <input type="text" class="input cc-txt"/>
                </div>
              </div>
              <div class="row-cc">
                <div class="cc-field">
                  <div class="cc-title">Nome do cartão
                  </div>
                  <input type="text" class="input cc-txt"/>
                </div>
              </div>    

            </div> --}}
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
          <form action="" method="post">
            <div class="pymt-radio">


              <div class="row-payment-method payment-row">
                <div class="select-icon">
                  <input type="radio" id="radio1" name="radios" value="pp">
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
                  <input type="radio" id="radio2" name="radios" value="pp" checked>
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
              <div class="row-cc">
                <div class="cc-field">
                  <div class="cc-title">Número do cartão de crédito
                  </div>
                  <input type="text" class="input cc-txt text-validated" value="4542 9931 9292 2293" />
                </div>
              </div>
              <div class="row-cc">
                <div class="cc-field">
                  <div class="cc-title">Data de validade
                  </div>
                  <select class="input cc-ddl">
                    <option selected>01</option>
                    <option>02</option>
                    <option>03</option>
                    <option>04</option>
                    <option>05</option>
                    <option>06</option>
                    <option>07</option>
                    <option>08</option>
                    <option>09</option>
                    <option>10</option>
                    <option>11</option>
                    <option>12</option>          
                  </select>
                  <select class="input cc-ddl">
                    <option>01</option>
                    <option>02</option>
                    <option>03</option>
                    <option>04</option>
                    <option>05</option>
                    <option>06</option>
                    <option>07</option>
                    <option>08</option>
                    <option>09</option>
                    <option>10</option>
                    <option>11</option>
                    <option>12</option>
                    <option>13</option>
                    <option>14</option>
                    <option>15</option>
                    <option selected>16</option>
                    <option>17</option>
                    <option>18</option>
                    <option>19</option>
                    <option>20</option>
                    <option>21</option>
                    <option>22</option>
                    <option>23</option>
                    <option>24</option>
                    <option>25</option>
                    <option>26</option>
                    <option>27</option>
                    <option>28</option>
                    <option>29</option>
                    <option>30</option>
                    <option>31</option>            
                  </select>
                </div>
                <div class="cc-field">
                  <div class="cc-title">CVV<span class="numberCircle">?</span>
                  </div>
                  <input type="text" class="input cc-txt"/>
                </div>
              </div>
              <div class="row-cc">
                <div class="cc-field">
                  <div class="cc-title">Nome do cartão
                  </div>
                  <input type="text" class="input cc-txt"/>
                </div>
              </div>    

            </div>
            <div class="button-master-container">
              <div class="button-container"><a href={{ route('loja.index') }}>Voltar às compras</a>
              </div>
              <div class="button-container button-finish"><a href="#">Finalizar pedido</a>
              </div>
            </div>
          </form>
        </section>
      </div>

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