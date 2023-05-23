@extends('layout.app')
@section('main')


<h1 style="text-align: center">Pedidos de {{Auth::user()->USUARIO_NOME}}</h1>


<div style="display: flex; flex-direction: row; wrap:rowrap">



@foreach($pedido as $pedido)


        <div class="card w-20">
        <div class="card-body">
            <h5 class="card-title">Pedido</h5>
            <a href="" class="btn btn-primary">Ver Pedido</a>
        </div>
        </div>



@endforeach
</div>



@endsection
