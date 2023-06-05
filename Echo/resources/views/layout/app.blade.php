<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
 <link rel="stylesheet" href="/style.css">
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <title>EchoMusic</title>


<style>
    body{
    overflow-x: hidden;
    width: 100%;
    }




</style>





</head>
<body>

  <!--Nav-->
  <nav class="navbar bg-dark" data-bs-theme="dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="/dashboard"><img src="/Echo.png" width="50px" height="50px"> </a>
      <nav class="navbar bg-body-tertiary">
        <div class="mx-auto" style="width: 600px;">
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="O que você procura?" aria-label="Search">
            <button class="btn btn-outline-success" type="submit" style="color: white;">Procurar</button>
          </form>
        </div>
      </nav>

      <span>
        <a src="img/1.png" style="width: 30;;height:30;"></a>
        @if(Auth::check())
        <b style="color: white;">Olá {{Auth::user()->USUARIO_NOME}}</b>

        <form method="POST" action="{{ route('logout') }}">
                    @csrf



                    <button type="button" class="btn btn-outline-warning" style="color: #e3762b;";
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                       Sair
</button>
                </form>
        @else

        <a href="{{ route('login') }}" style="color: #e3762b;"> <button class="btn btn-warning"> Fazer Login </button> </a>
        
        <a href="{{ route('register') }}" style="color: #e3762b;"><button class="btn btn-warning"> Registrar </button></a>
        @endif
      </span>

<!-- carrinho -->

@if(Auth::check())

       <a href="{{ route('user.index') }}"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#e3762b" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg></a>

       <a href="{{route ('pedido.show')}}">
        <button  class="btn" style="color: #e3762b;     font-family: 'Times New Roman', Times, serif;" > Meus pedidos</button>
       </a>

       <a href="{{ route('carrinho.index') }}"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-shopping-cart" width="40" height="40" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round" style="color: #e3762b;">
        @else
        <a href="{{ route('login') }}"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-shopping-cart" width="40" height="40" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round" style="color: #e3762b;">
@endif
        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
        <path d="M6 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
        <path d="M17 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
        <path d="M17 17h-11v-14h-2"></path>
        <path d="M6 5l14 1l-1 7h-13"></path>
     </svg></a>
    </div>
  </nav>

  <!--Nav dois-->

  <header id="header">

    <nav id="nav">
      <ul id="menu">

      <li><a href="/dashboard">Home</a></li>
        <li><a href="{{ route('produto.index') }}">Produtos</a></li>
        <li><a href="{{ route('categoria.index') }}">Categorias</a></li>

      </ul>
    </nav>
  </header>


  <main>
    @yield('main')
  </main>


  <footer class="bg-dark text-light" style="margin-top:15%;">
    <div class="container-fluid py-3" style="background-color: #18171d;">
    <div class="row">
      <div class="col-4">
        <ul class="nav flex-column">
          <li class="nav-link"><a href="#">Retornar à Loja</a></li>
          <li class="nav-link"><a href="#">Sobre</a></li>
          <li class="nav-link"><a href="#">Contato</a></li>
          <li class="nav-link"><a href="#">Suporte</a></li>
        </ul>
      </div>
      <div class="col-8">
        <p>
        Na Echo, nossa paixão pela música nos impulsiona a fornecer produtos de alta qualidade para músicos de todos os níveis de habilidade. Seja você um iniciante animado em busca do seu primeiro instrumento ou um músico experiente procurando aprimorar seu som, temos tudo o que você precisa para criar música e se expressar.        </p>
        <ul class="nav">
          <li class="nav-link" ><i class="fab fa-facebook fa-3x "></i></li>
          <li class="nav-link"><i class="fab fa-instagram fa-3x"></i></li>
          <li class="nav-link"><i class="fab fa-twitter fa-3x"></i></li>
          <li class="nav-link"><i class="fab fa-whatsapp fa-3x"></i></li>
        </ul>
      </div>
    </div>
    </div>
    <div class="text-center" style="background-color: #18171d;" >
      &copy 2023 Copyright
    </div>
  </footer>
