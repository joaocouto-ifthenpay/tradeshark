@extends('layouts.frontoffice')

@section('content')

    <!-- ............... -->
    <!-- Dados do perfil -->
    <!-- ............... -->
    <h1 style="margin-top: 80px;" class="product-card_tit">Os meus dados</h1>
    <div class="form-container">
      <div class="form-section">
        <form class="contact-form">
          <div class="form-group">
            <input type="text" id="nome" placeholder="Nome" name="nome" required>
          </div>
          <div class="form-group">
            <input type="text" id="email" placeholder="Email" name="email" required>
          </div>
          <div class="form-group">
            <input type="text" id="senha" placeholder="Palavra-passe" name="senha" required>
          </div>
          <div class="form-group">
            <input type="text" id="telefone" placeholder="Telefone" name="telefone">
          </div>
          <div class="form-group">
            <input type="text" id="pais" placeholder="País" name="pais">
          </div>
          <div class="form-group">
            <input type="text" id="nif" placeholder="NIF" name="nif">
          </div>
          <div class="form-group">
            <input type="text" id="iban" placeholder="IBAN" name="iban">
          </div>
        </form>
      </div>

      <div class="form-section">
        <div class="edit-block">
          <h4>Endereço de Faturação</h4>
          <p><strong>Paulo Guimarães</strong><br>
            Rua do Rechão nº18<br>
            5030-325 Santa Marta de Penaguião<br>
            Telefone: 910 790 871
          </p>
          <button>Editar</button>
        </div>

        <div class="edit-block">
          <h4>Endereço de Faturação</h4>
          <p><strong>Paulo Guimarães</strong><br>
            Rua do Rechão nº18<br>
            5030-325 Santa Marta de Penaguião<br>
            Telefone: 910 790 871
          </p>
          <button>Editar</button>
        </div>
      </div>
    </div>

    <!-- ...................... -->
    <!-- Product cards / titulo -->
    <!-- ...................... -->
    <h1 class="product-card_tit">Os meus favoritos</h1>
    <div class="geral_product-card">
      <div class="product-card">
        <div class="product-tumb">
          <img src="{{ asset('assets/PANEL_FACHADA_FIJACIONES_OCULTAS.png') }}" alt="">
        </div>
        <div class="product-details">
          <span class="product-catagory">Obras</span>
          <h4><a href="">Título</a></h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, possimus nostrum!</p>
          <div class="product-bottom-details">
            <div class="product-price"><small>2.560€</small>1.780€</div>
            <div class="product-links">
              <a href=""><i class="fa fa-heart"></i></a>
              <a href=""><i class="fa fa-shopping-cart"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="product-card">
        <div class="product-tumb">
          <img src="{{ asset('assets/Bobina-1-1-1024x1024.png') }}" alt="">
        </div>
        <div class="product-details">
          <span class="product-catagory">Obras</span>
          <h4><a href="">Título</a></h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, possimus nostrum!</p>
          <div class="product-bottom-details">
            <div class="product-price"><small>2.560€</small>1.780€</div>
            <div class="product-links">
              <a href=""><i class="fa fa-heart"></i></a>
              <a href=""><i class="fa fa-shopping-cart"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection