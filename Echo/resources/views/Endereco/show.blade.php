@extends('layout.app')
@section('main')


<h1>Endereço salvo com sucesso!</h1>


<form method="POST" action="{{route('pedido.store', Auth::user()->USUARIO_ID)}}" >
@csrf
<button type="submit" class="btn btn-success">Finalizar pedido</button>
</form>







@endsection
