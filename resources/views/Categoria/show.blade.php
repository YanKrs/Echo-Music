@extends('layout.app')
@section('main')


<div>
    <p> {{$categoria}}</p>
    <br>

    <P> {{$categoria->PRODUTO_NOME}}</P>



</div>




















<h1 style="text-align: center; margin-bottom: 5%; margin-top: 5%;">Produtos</h1>


<div class="row align-items-start">
    <div class="col">
    <div class="segundo" style="display:flex; justify-content: space-between; flex-wrap:wrap; gap: 20px 20px;">


    @foreach(\App\Models\Produto::where('CATEGORIA_ID', $categoria['CATEGORIA_ID'])->get() as $produto)



    <div class="card mx-1" style="width: 18rem;">
    @if(Isset($produto->ProdutoImagem[0]->IMAGEM_URL))
  <img src="{{$produto->ProdutoImagem[0]->IMAGEM_URL}}" class="card-img-top" alt="...">
  @else
  <img src="https://triunfo.pe.gov.br/pm_tr430/wp-content/uploads/2018/03/sem-foto.jpg" class="card-img-top" alt="...">
  @endif
  <div class="card-body">
    <h5 class="card-title">{{$produto->PRODUTO_NOME}}</h5>
    <p class="card-text">{{$produto->PRODUTO_DESC}}</p>
    <p>R${{$produto->PRODUTO_PRECO}}</p>
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


























@endsection
