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
          <form method="POST" action="php/login.php">
            <h2 class="form-geral_titulo">login</h2>
            <input type="text" name="login" placeholder="Nome de utilizador" autofocus id="login" required>
            <input type="password" name="senha" placeholder="Password" id="senha" required>
            <input type="submit" name="entrar" value="Entrar" id="entrar">
          </form>
          <p>Ainda nao tens conta?<a href={{ route('registo') }}> <strong>Criar conta</strong></a></p>
        </div>
      </section>
@endsection