@extends('layout.app')
@section('main')

<h1 style="text-align: center; margin-bottom:5%;">Seus Pedidos</h1>



@foreach($pedidos as $pedido)

@csrf

  <li class="list-group-item d-flex justify-content-between align-items-start" style="background-color:#96be25; margin: 3%;">
    <div class="ms-2 me-auto">
      <div class="fw-bold">Número do seu pedido:{{$pedido->PEDIDO_ID}}</div>
      Status do seu pedido: {{$pedido->STATUS_ID}}
    </div>
    <p style="text-align:left;">Dia do pedido: {{$pedido->PEDIDO_DATA}}</p>

    <span class="badge bg-primary rounded-pill"></span>

    </form>
</li>

@endforeach


@endsection
