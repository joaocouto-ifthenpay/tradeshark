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

        <form method="POST" action="php/registo.php">
            <h2 class="form-geral_titulo">Faz aqui o teu registo</h2>
            <input type="text" name="login" placeholder="Nome de utilizador" autofocus id="login">
            <input type="password" name="senha" placeholder="Password" id="senha">
            <input type="submit" name="registar" value="Registar" id="registar">
        </form>
        <p>Voltar para o<a href={{ route('login') }}> <strong>login</strong></a>?</p>

    </div>
  </section>
@endsection