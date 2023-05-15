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
     <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('register') }}">
                Criar uma conta
            </a>


            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('welcome') }}">
                Criar uma conta
            </a>
