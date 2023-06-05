@extends('layout.app')
@section('main')


<h1 style="text-align: center; margin-bottom:5%; margin-top:5%;">Seu Carrinho</h1>

@if(count($carrinho) > 0)

<ol class="list-group list-group-numbered" style="margin: 5%">
@foreach($carrinho as $carrinho)

<form  method="POST" action="{{route('carrinho.remove', $carrinho->Produto->PRODUTO_ID)}}">

@csrf

  <li class="list-group-item d-flex justify-content-between align-items-start" style="margin-bottom: 2%;    border-radius:10px; border:solid #38221f 2px;">
    <div class="ms-2 me-auto">
      <div class="fw-bold">{{$carrinho->Produto->PRODUTO_NOME}}</div>
      {{$carrinho->Produto->PRODUTO_DESC}}
    </div>
    <p style="margin-right: 10%" > <button type="submit" class="btn">
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#e3762b" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x-circle"><circle cx="12" cy="12" r="10"/><line x1="15" y1="9" x2="9" y2="15"/><line x1="9" y1="9" x2="15" y2="15"/></svg>
    </button> </p>
    <p style="text-align:left; margin-right:5px;">R${{$carrinho->Produto->PRODUTO_PRECO * $carrinho->ITEM_QTD}}</p>

    <span class="badge bg-primary rounded-pill">{{$carrinho->ITEM_QTD}}</span>

    </form>
</li>

@endforeach

</ol>

<!-- <form action="{{route('pedido.store')}}" method="POST"> -->
    <!-- @csrf -->
    <a href="{{route('endereco.index')}}"><button class="btn btn-success" style="margin: 50px; display: flex;">Finalizar compra</button></a>

<!-- </form> -->



@else


<h2 style="text-align: center; margin-bottom: 10%; font-size: 80px;">Seu carrinho está vazio :(</h2>


<a href="{{route('endereco.index')}}"><button class="btn btn-success" style="margin: 50px; display: flex;">Finalizar compra</button></a>


@endif
@endsection
