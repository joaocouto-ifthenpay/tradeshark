@extends('layouts.auth')
 
{{-- @section('title', 'Page Title') --}}
 
{{-- @section('sidebar')
    @parent
 
    <p>This is appended to the master sidebar.</p>
@endsection --}}
 
@section('content')
    <section class="form-geral">
        <div class="form-geral_campos">
          <div>
            <img class="form-geral_logo" src="assets/LOGO2.png">
          </div>

          @if($msg = Session::get('error'))
            {{ $msg }}
          @endif

          @if($errors->any())
            @foreach($errors->all() as $error)
                {{$error}} <br>
            @endforeach
          @endif

          <form method="POST" action="{{route('login.auth')}}">
            @csrf
            <h2 class="form-geral_titulo">login</h2>
            <input type="email" name="email" placeholder="Nome de utilizador" autofocus id="email" required>
            <input type="password" name="password" placeholder="Password" id="password" required>
            <input type="submit" name="entrar" value="Entrar" id="entrar">
          </form>
          <p>Ainda nao tens conta?<a href={{ route('register') }}> <strong>Criar conta</strong></a></p>
        </div>
      </section>
@endsection