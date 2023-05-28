@extends('layout.app')
@section('main')

<!--tela de produto-->
@if(Auth::check())


<form  method="POST" action="{{route('carrinho.store', $produto->PRODUTO_ID)}}">
@csrf


<div class="container text-center">
    <div class="row align-items-center">
      <div class="col">
        <img src='{{$produto->ProdutoImagem[0]->IMAGEM_URL}}' class="img-fluid" alt="...">
      </div>
      <div class="col">
        <h1>{{ $produto->PRODUTO_NOME }}</h1>
        <div class="h4 pb-2 mb-4 text-danger border-bottom border-dark">
        </div>
        <h4> {{$produto->PRODUTO_DESC}} </h4>  <br>
        <p style="font-size: smaller;">Aproveite, ainda temos <b style="color: red;">{{$produto->ProdutoEstoque->PRODUTO_QTD}} </b>  no estoque</p><br>
        <p><b>R$ {{ $produto->PRODUTO_PRECO }} em até<br>10 x de R$ {{ $produto->PRODUTO_PRECO / 10 }} sem juros</b></p>
        <div class="d-grid gap-2 col-6 mx-auto">

        <button type="submit" class="btn btn-outline-success">Comprar</button>
            <p><b>R$ {{  $produto->PRODUTO_PRECO - $produto->PRODUTO_DESCONTO }} à vista</b>  (<b style="color: red; font-size: smaller;">com 10,00% de desconto no Boleto Bancário / Transferência Itaú</b>)</p>
            <div class="hstack gap-3">



</form>

          </div>
    </div>
  </div>
</div>
</div>


@else


<div class="container text-center">
    <div class="row align-items-center">
      <div class="col">
        <img src='{{$produto->ProdutoImagem[0]->IMAGEM_URL}}' class="img-fluid" alt="...">
      </div>
      <div class="col">
        <h1>{{ $produto->PRODUTO_NOME }}</h1>
        <div class="h4 pb-2 mb-4 text-danger border-bottom border-dark">
        </div>
        <h4> {{$produto->PRODUTO_DESC}} </h4>  <br>
        <p style="font-size: smaller;">Aproveite, ainda temos <b style="color: red;">{{$produto->ProdutoEstoque->PRODUTO_QTD}} </b>  no estoque</p><br>
        <p><b>R$ {{ $produto->PRODUTO_PRECO }} em até<br>10 x de R$ {{ $produto->PRODUTO_PRECO / 10 }} sem juros</b></p>
        <div class="d-grid gap-2 col-6 mx-auto">

        <a href="{{ route('login') }}">
            <button type="submit" class="btn btn-outline-success">Comprar</button>
         </a>
            <p><b>R$ {{  $produto->PRODUTO_PRECO - $produto->PRODUTO_DESCONTO }} à vista</b>  (<b style="color: red; font-size: smaller;">com 10,00% de desconto no Boleto Bancário / Transferência Itaú</b>)</p>
            <div class="hstack gap-3">




@endif

@endsection



