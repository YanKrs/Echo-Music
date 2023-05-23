@extends('layout.app')
@section('main')


<h1 style="text-align: center; margin-bottom:5%;">Seu Carrinho</h1>


<ol class="list-group list-group-numbered">




@foreach($carrinho as $carrinho)



  <li class="list-group-item d-flex justify-content-between align-items-start">
    <div class="ms-2 me-auto">
      <div class="fw-bold">{{$carrinho->Produto->PRODUTO_NOME}}</div>
      {{$carrinho->Produto->PRODUTO_DESC}}
    </div>
    <p style="text-align:left;">R${{$carrinho->Produto->PRODUTO_PRECO * $carrinho->ITEM_QTD}}</p>
    <span class="badge bg-primary rounded-pill">{{$carrinho->ITEM_QTD}}</span>
</li>

@endforeach

</ol>


<!-- <form action="{{route('pedido.store')}}" method="POST"> -->
    <!-- @csrf -->
    <a href="{{route('endereco.index')}}"><button class="btn btn-success" style="margin: 50px; display: flex;">Finalizar compra</button></a>

<!-- </form> -->



@endsection
