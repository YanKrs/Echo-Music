@extends('layout.app')
@section('main')


<h1 style="text-align:center; margin-bottom: 10%;  margin-top: 5%;">Edite suas informações</h1>



    <form method="POST" action="{{ route('user.show')}}" style="margin: 5% 20% 5% 20%;">
        @csrf

        <!-- Name -->
         <div class="mb-3">
    <label class="form-label">Nome</label>
    <input type="text" class="form-control" required name="name" autofocus value="{{$usuario->USUARIO_NOME}}">
</div>

<div class="mb-3">
    <label class="form-label">Email</label>
    <input type="Email" class="form-control" required name="email" autofocus value="{{$usuario->USUARIO_EMAIL}}">
</div>

<div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">CPF</label>
    <input type="text" class="form-control" disabled name="password" autofocus value="{{$usuario->USUARIO_CPF}}">
</div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" required name="password" autofocus>
  </div>


        <div style="text-align:center">
            <br>
            <button type="submite" class="btn btn-primary">Salvar</button>
        </div>
    </form>

    </main>
@endsection
