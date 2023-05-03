@extends('layout.app')
@section('main')


<h1 style="text-align: center;">Produtos</h1>


<div class="row align-items-start">
    <div class="col">
    <div class="segundo" style="display:flex; justify-content: center;">
    @foreach(\App\Models\Produto::all() as $produto)

    <div class="card mx-1" style="width: 18rem;">
    @if(Isset($produto->ProdutoImagem[0]->IMAGEM_URL))
  <img src="{{$produto->ProdutoImagem[0]->IMAGEM_URL}}" class="card-img-top" alt="...">
  @else
  <img src="https://triunfo.pe.gov.br/pm_tr430/wp-content/uploads/2018/03/sem-foto.jpg" class="card-img-top" alt="...">
  @endif
  <div class="card-body">
    <h5 class="card-title">{{$produto->PRODUTO_NOME}}</h5>
    <p class="card-text">{{$produto->PRODUTO_DESC}}</p>
    <a href="/produto/{{$produto->PRODUTO_ID}}" class="btn btn-primary">Ver Item</a>
  </div>
</div>

@endforeach
</div>
  </div>

    @endsection


