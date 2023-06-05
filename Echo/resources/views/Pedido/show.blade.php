@extends('layout.app')
@section('main')

<h1 style="text-align: center; margin-bottom:5%; margin-top:5%; font-family: Verdana, Geneva, Tahoma, sans-serif;">
Seus Pedidos</h1>


@if(isset($pedidos))

@foreach($pedidos as $pedido)

@csrf

  <li class="list-group-item d-flex justify-content-between align-items-start" style="background-color:#37767c; margin: 3%; border-radius:10px; border:2px solid black; padding: 10px;">
    <div class="ms-2 me-auto">
      <div class="fw-bold">Número do seu pedido:{{$pedido->PEDIDO_ID}}</div>
       <p class="fw-bold"> Status do seu pedido: &nbsp;&nbsp;&nbsp;&nbsp;{{$pedido->STATUS->STATUS_DESC}}</p>
    </div>
    <p style="text-align:left;" class="fw-bold">Dia do pedido: {{$pedido->PEDIDO_DATA}}</p>

    <span class="badge bg-primary rounded-pill"></span>

    </form>
</li>

@endforeach

@else

<h2 style="text-align: center; margin-bottom: 10%; font-size: 80px;">Você não tem nenhum pedido :(</h2>

@endif

@endsection
