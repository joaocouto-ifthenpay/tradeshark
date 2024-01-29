@extends('layouts.frontoffice')

@section('content')

        <!-- ....... -->
        <!-- Produto -->
        <!-- ....... -->
        <div class="container">
            <div class="article">
              <div class="article-img">
                <img class="article-img--main" src="{{ asset('assets/pavimento.jpg') }}" alt="">
                <div class="additional-images">
                    <img src="{{ asset('assets/pavimento.jpg') }}" alt="">
                    <img src="{{ asset('assets/pavimento.jpg') }}" alt="">
                    <img src="{{ asset('assets/pavimento.jpg') }}" alt="">
                </div>
              </div>
              <div class="article-info">
                <h1>{{ $item->item_name }}</h1>
                <p class="description">{{ $item->description }}</p>
                <p class="price">{{ number_format($item->price, 2,',', '.') }}€<!--1.599,<small>99€</small>--></p>
                <div class="quantity text-center">
                  <form action="{{ route('loja.addCart')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" value="{{$item->id}}">
                    <input type="hidden" name="name" value="{{$item->item_name}}">
                    <input type="hidden" name="price" value="{{$item->price}}">
                    <input type="number" name="quantity" value="1" min="1" class="form-control mr-2 quantity-input" >
                    <input type="hidden" name="image" value="{{$item->image_url}}">
                    <p>
                      <button class="add-to-cart"><i class="fas fa-shopping-cart"></i> Adicionar</button>
                      <button class="buy-now">Comprar Já</button>
                    </p>
                  </form>
                </div>

                <!-- ............. -->
                <!-- Financiamento -->
                <!-- ............. -->
                <div id="financiamento" class="financing-section">
                    <div class="financing-section-title">Financiamento</div>

                    <div class="financing-option">
                      <div class="financing-option-text">Nº de Meses</div>
                      <select class="financing-form-control financing-select">
                        <option value="6" data-price="168.49" rel="nofollow">6 Meses - Crédito com juros</option>
                        <option value="10" data-price="102.79" rel="nofollow">10 Meses - Crédito com juros</option>
                        <!-- ... Adicione outras opções conforme necessário ... -->
                      </select>
                    </div>
                  
                    <div class="financing-estimate">
                      Mensalidade <span class="financing-price">168,49 €</span> <span class="financing-month">/Mês</span>
                    </div>
                  
                    <div class="financing-text">
                      Meses: <span id="financiamento-info-meses">6</span> | Mensalidade: <span id="financiamento-info-mensalidade">168,49 €</span> | Acresce Imposto selo (ISUC) <span id="financiamento-info-isuc">12,43 €</span> à 1ª mensalidade | MTIC: <span id="financiamento-info-mtic">1.023,37 €</span>
                      <br><span class="financing-info-icon icon-info"></span><b> TAEG: <span id="financiamento-info-taeg">14.6</span>%.</b>
                      <br><span class="financing-info-icon icon-info"></span><b> TAN: <span id="financiamento-info-tan">10,37</span>%.</b>
                      <a href="/pt/apoio-ao-cliente/financiamento" target="_blank">Saiba mais <span class="icon-long-arrow-right"></span></a>
                    </div>
                  </div>
                  
              </div>
            </div>

            <!-- Adição da descrição completa e detalhes -->
            <br>
            <div class="article">
                <div class="product-description">
                  <h2>Características</h2>
                  <p>Pavimento flutuante laminado Artens Brits que imita a madeira natural, fabricado em HDF com um acabamento cinzento-castanho. Recomendado para uso intensivo, adequado para quartos, salas de estar e cozinhas, bem como para utilização em lojas. É compatível com piso radiante a baixas temperaturas. Vendido em embalagens de 1,98 m². Possui o selo PEFC, que certifica que a madeira provém de florestas geridas de forma sustentável e que respeitam o meio ambiente. Garantia de 30 anos. Medidas: 19,2 x 12,9 x 0,8 cm (largura x comprimento x espessura).</p>
                  <section class="product-specs">
                    <h3 class="specs-title">Características do Pavimento Flutuante Laminado Artens Brits</h3>
                    <div class="specs-container">
                      <table class="specs-table">
                        <tr>
                          <td><strong>Tipo de produto:</strong></td>
                          <td>Pavimento flutuante laminado</td>
                        </tr>
                        <tr>
                          <td><strong>Marca do produto:</strong></td>
                          <td>ARTENS</td>
                        </tr>
                        <!-- Adicione outras características conforme necessário -->
                        <tr>
                          <td><strong>Nível de qualidade:</strong></td>
                          <td>Intenso</td>
                        </tr>
                        <tr>
                          <td><strong>Espessura total (em mm):</strong></td>
                          <td>8</td>
                        </tr>
                        <tr>
                          <td><strong>Resistência à abrasão (Padrão AC):</strong></td>
                          <td>AC5</td>
                        </tr>
                        <tr>
                          <td><strong>Família de cor:</strong></td>
                          <td>Cinza / prateado</td>
                        </tr>
                        <!-- Adicione outras características conforme necessário -->
                        <tr>
                          <td><strong>Destino:</strong></td>
                          <td>Quarto | Sala | Loja</td>
                        </tr>
                        <tr>
                          <td><strong>Tipo de colocação:</strong></td>
                          <td>Flutuando</td>
                        </tr>
                        <tr>
                          <td><strong>Material principal:</strong></td>
                          <td>HDF</td>
                        </tr>
                        <!-- Adicione outras características conforme necessário -->
                        <tr>
                          <td><strong>Certificação de madeira:</strong></td>
                          <td>PEFC</td>
                        </tr>
                        <tr>
                          <td><strong>Produto etiqueta ecológica:</strong></td>
                          <td>Rótulo ecológico europeu</td>
                        </tr>
                        <tr>
                          <td><strong>País de fabricação:</strong></td>
                          <td>Alemanha</td>
                        </tr>
                        <!-- Adicione outras características conforme necessário -->
                        <tr>
                          <td><strong>Garantia (em anos):</strong></td>
                          <td>30</td>
                        </tr>
                        <tr>
                          <td><strong>Comprimento (em cm):</strong></td>
                          <td>129.1</td>
                        </tr>
                        <tr>
                          <td><strong>Largura (em cm):</strong></td>
                          <td>19.2</td>
                        </tr>
                        <!-- Adicione outras características conforme necessário -->
                        <tr>
                          <td><strong>Conteúdo da embalagem (em m²):</strong></td>
                          <td>1.98</td>
                        </tr>
                      </table>
                    </div>
                  </section>
              
                  <p>EAN: 1234567890</p>
                  <p>Referência do Artigo: ABC123</p>
                </div>
              </div>
          </div>

@endsection