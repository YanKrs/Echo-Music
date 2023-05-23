@extends('layout.app')
@section('main')

<h1 style="text-align: center; margin: 25px; ">Informe o seu endereço</h1>

@if(!\App\Models\Endereco::where('USUARIO_ID' , Auth::user()->USUARIO_ID)->count())


<form class="row g-3" method="POST" action="{{route('endereco.show', Auth::user()->USUARIO_ID)}}" >
    @csrf
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Nome do endereço</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="casa, trabalho..." name="Endereco_nome">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Logradouro</label>
    <input type="text" class="form-control" id="inputAddress" name="Logradouro">
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">Número</label>
    <input type="number" class="form-control" id="inputAddress" placeholder="" name="Numero">
  </div>
  <div class="col-12">
    <label for="inputAddress2" class="form-label">Complemento</label>
    <input type="text" class="form-control" id="inputAddress" name="Complemento">
  </div>
  <div class="col-md-6">
    <label for="inputCity" class="form-label">CEP</label>
    <input type="text" class="form-control" id="inputCity" name="Cep">
  </div>
  <div class="col-md-4">
        <div class="col-md-6">
        <label for="inputCity" class="form-label">Cidade</label>
        <input type="text" class="form-control" id="inputCity" name="Cidade">
    </div>
  </div>
  <div class="col-md-2">
    <label for="inputZip" class="form-label">Estado</label>
    <input type="text" class="form-control" id="inputZip" name="Estado">
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Salvar endereço</button>
  </div>
</form>


@else

<form class="row g-3" method="POST" action="{{route('endereco.show', Auth::user()->USUARIO_ID)}}" >
@csrf
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Casa</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="casa, trabalho..." name="Endereco_nome" value="{{$endereco->ENDERECO_NOME}}">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Logradouro</label>
    <input type="text" class="form-control" id="inputAddress" name="Logradouro" value="{{$endereco->ENDERECO_LOGRADOURO}}">
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">Número</label>
    <input type="number" class="form-control" id="inputAddress" placeholder="" name="Numero" value="{{$endereco->ENDERECO_NUMERO}}">
  </div>
  <div class="col-12">
    <label for="inputAddress2" class="form-label">Complemento</label>
    <input type="text" class="form-control" id="inputAddress" name="Complemento" value="{{$endereco->ENDERECO_COMPLEMENTO}}">
  </div>
  <div class="col-md-6">
    <label for="inputCity" class="form-label">CEP</label>
    <input type="text" class="form-control" id="inputCity" name="Cep" value="{{$endereco->ENDERECO_CEP}}">
  </div>
  <div class="col-md-4">
        <div class="col-md-6">
        <label for="inputCity" class="form-label">Cidade</label>
        <input type="text" class="form-control" id="inputCity" name="Cidade" value="{{$endereco->ENDERECO_CIDADE}}">
    </div>
  </div>
  <div class="col-md-2">
    <label for="inputZip" class="form-label">Estado</label>
    <input type="text" class="form-control" id="inputZip" name="Estado" value="{{$endereco->ENDERECO_ESTADO}}">
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Salvar endereço</button>
  </div>
</form>

@endif







@endsection
