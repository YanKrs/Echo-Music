@extends('layout.app')
@section('main')
    <!-- <h1>{{$categorias}}</h1> -->

    <h1 style="text-align: center;">Categorias</h1>


    <div class="container overflow-hidden text-center" style="display:flex; flex-direction: row; justify-content: center;">


    @foreach(\App\Models\Categoria::all() as $categoria)



  <div class="row gx-5">
    <div class="col">
     <div class="p-3">

     <button type="button" class="btn btn-light">{{$categoria->CATEGORIA_NOME}}</button>

     <a href="/categoria/{{$categoria->CATEGORIA_ID}}" class="btn btn-primary">Ver Itens</a>

     </div>
    </div>
  </div>
</div>

        @endforeach

@endsection
