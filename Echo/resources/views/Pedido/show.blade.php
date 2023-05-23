@extends('layout.app')
@section('main')


<h1 style="text-align: center">Pedidos de {{Auth::user()->USUARIO_NOME}}</h1>


<div style="display: flex; flex-direction: row;">

@foreach($pedido as $pedido)

<form  method="POST" action="{{route('pedido.show', $pedido->PEDIDO_ID)}}">
@csrf
        <div class="card w-20">
        <div class="card-body">
            <h5 class="card-title">Pedido</h5>
            <p class="card-text">{{$pedido}}</p>
            <a href="{{route('pedido.show', 'PEDIDO_ID')}}" class="btn btn-primary">Ver Pedido</a>
        </div>
        </div>

</form>

@endforeach
</div>



@endsection
