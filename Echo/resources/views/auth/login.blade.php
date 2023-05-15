@extends('layout.login')
@section('main')


    <form method="POST" action="{{ route('login') }}">
        @csrf

        <h1>Login</h1>

     <div class="container">

      <input type="email" required name="email">

       <label>E-mail</label>
    </div>
    <div class="container">

        <input type="password" required name="password">

         <label>Password</label>
      </div>
     <button>Entrar</button>

     <a href="{{ route('register') }}">Criar conta</a>

     <a href="/">Ir para Home</a>


     @endsection


