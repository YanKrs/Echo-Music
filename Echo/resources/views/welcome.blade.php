@extends('layout.app')
@section('main')





<div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/ECKO_1.jpeg" class="d-block w-100" alt="..." width="500" height="500">
      </div>
      <div class="carousel-item">
        <img src="img/ECKO_2.jpeg" class="d-block w-100" alt="..." width="500" height="500">
      </div>
      <div class="carousel-item">
        <img src="img/ECKO_3.jpeg" class="d-block w-100" alt="..." width="500" height="500">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <!--TEXTO  DE 10% DE DESCONTO-->

  <section class="desconto">
     <h1> <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-box2" viewBox="0 0 16 16">
      <path d="M2.95.4a1 1 0 0 1 .8-.4h8.5a1 1 0 0 1 .8.4l2.85 3.8a.5.5 0 0 1 .1.3V15a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V4.5a.5.5 0 0 1 .1-.3L2.95.4ZM7.5 1H3.75L1.5 4h6V1Zm1 0v3h6l-2.25-3H8.5ZM15 5H1v10h14V5Z"/>
    </svg> FRETE GRATIS</h1>

  </section><br><br>


  <!--SEGUNDO CARROSEL DE MARCAS-->

  <section class="segundoCarrosel">

    <div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/carrossel.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="..." class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="..." class="d-block w-100" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

  </section><br><br>


<!--DESTAQUES DA SEMANA-->

  <section class="maisQuerido">
    <h2>Destaques Da Semana</h2>
  </section><br>







  <div class="row align-items-start">
    <div class="col">
    <div class="segundo" style="display:flex; justify-content: center;">
    @foreach(\App\Models\Produto::all()->take(3) as $produto)

    <div class="card mx-5" style="width: 18rem;">

    <!-- Formulário para enviar dados ao carrinho -->

    <form  method="POST" action="{{route('carrinho.store', $produto->PRODUTO_ID)}}">
        @csrf

    @if(Isset($produto->ProdutoImagem[0]->IMAGEM_URL))
  <img src="{{$produto->ProdutoImagem[0]->IMAGEM_URL}}" class="card-img-top" alt="...">
  @else
  <img src="https://triunfo.pe.gov.br/pm_tr430/wp-content/uploads/2018/03/sem-foto.jpg" class="card-img-top" alt="...">
  @endif
  <div class="card-body">
    <h5 class="card-title">{{$produto->PRODUTO_NOME}}</h5>
    <p class="card-text">{{$produto->PRODUTO_DESC}}</p>
    <p class="card-text">R${{$produto->PRODUTO_PRECO}}</p>
    <a href="/produto/{{$produto->PRODUTO_ID}}" class="btn btn-primary">Ver Item</a>
<!-- Botão para colocar item no carrinho apenas se estiver logado -->

@if(Auth::check())
    <form  method="POST" action="{{route('carrinho.store', $produto->PRODUTO_ID)}}">
    <button type="submit" class="btn btn-outline-success">Comprar</button>
</form>
@endif

  </div>
</div>




@endforeach
</div>
  </div>
<br>










  <!--O MAIS DESEJADOS-->
<hr style="border:2px solid black;">
  <section class="maisQuerido" style="margin:2%;">
    <h2>Os mais desejados</h2>
  </section>
  <hr style="border:2px solid black;">
  <br>


  <div class="row align-items-start">
    <div class="col">
    <div class="segundo" style="display:flex; justify-content: center;">
    @foreach(\App\Models\Produto::all()->take(-3) as $produto)

    <div class="card mx-5" style="width: 18rem;">

    <!-- Formulário para enviar dados ao carrinho -->

    <form  method="POST" action="{{route('carrinho.store', $produto->PRODUTO_ID)}}">
        @csrf

    @if(Isset($produto->ProdutoImagem[0]->IMAGEM_URL))
  <img src="{{$produto->ProdutoImagem[0]->IMAGEM_URL}}" class="card-img-top" alt="...">
  @else
  <img src="https://triunfo.pe.gov.br/pm_tr430/wp-content/uploads/2018/03/sem-foto.jpg" class="card-img-top" alt="...">
  @endif
  <div class="card-body">
    <h5 class="card-title">{{$produto->PRODUTO_NOME}}</h5>
    <p class="card-text">{{$produto->PRODUTO_DESC}}</p>
    <p class="card-text">R${{$produto->PRODUTO_PRECO}}</p>
    <a href="/produto/{{$produto->PRODUTO_ID}}" class="btn btn-primary">Ver Item</a>
<!-- Botão para colocar item no carrinho apenas se estiver logado -->

@if(Auth::check())
    <form  method="POST" action="{{route('carrinho.store', $produto->PRODUTO_ID)}}">
    <button type="submit" class="btn btn-outline-success">Comprar</button>
</form>
@endif

  </div>
</div>




@endforeach
</div>
  </div>



</div>


 @endsection





</body>
</html>
