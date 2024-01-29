@extends('layouts.frontoffice')

@section('content')


      <!-- ........ -->
      <!-- Checkout -->
      <!-- ........ -->
      <h1 class="product-card_tit">Confirmação de Encomenda</h1>

      @if($msg = Session::get('error'))
      <div class="alert alert-danger" role="alert">
        {{$msg}}
      </div>
      @elseif($msg = Session::get('cancel'))
      <div class="alert alert-warning" role="alert">
        {{$msg}}
      </div>
      @elseif($msg = Session::get('success'))
      <div class="alert alert-success" role="alert">
        {{$msg}}
      </div>
      @else
      <div class="alert alert-success" role="alert">
        A sua encomenda foi concluída com sucesso!
      </div>
      @endif



        {{-- @if($cart->count() == 0)
        
        <div class="alert alert-danger" role="alert">
          Ocorreu um erro enquanto finalizava a encomenda
        </div>

        @else


        <section id="content3" class="tab-content">
          <h3>Expedição</h3>
          <p></p>
        </section>

        
      @endif --}}
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