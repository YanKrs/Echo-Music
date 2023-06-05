@extends('layout.app')
@section('main')
    <!-- <h1>{{$categorias}}</h1> -->

    <h1 style="text-align: center;">Categorias</h1>


    <div class="container overflow-hidden text-center" style="display:flex; flex-direction: row; justify-content: center; margin: 5% 0% 5% 5%">

    @foreach(\App\Models\Categoria::all() as $categoria)



  <div class="row gx-5">
    <div class="col">
     <div class="p-3">

     <a href="/categoria/{{$categoria->CATEGORIA_ID}}" > <button type="button" class="btn btn-warning">{{$categoria->CATEGORIA_NOME}}</button> </a>



     </div>
    </div>
  </div>


        @endforeach
        </div>
@endsection
