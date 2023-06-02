@extends('layout.app')
@section('main')



    <form method="POST" action="{{ route('user.show')}}">
        @csrf

        <!-- Name -->
         <h1 style="text-align:center">Edite suas informações</h1>
            <fieldset>
                <div style="text-align:center; margin-bottom:2%;">
                <label>Nome</label>

                    <input type="text" required name="name" autofocus value="{{$usuario->USUARIO_NOME}}">

                </div>


            <fieldset>
                <div style="text-align:center; margin-bottom:2%;">
                <label>E-mail</label>
                    <input type="email" required name="email" autofocus value="{{$usuario->USUARIO_EMAIL}}">
                </div>

            </fieldset>


            <fieldset>

                <div style="text-align:center; margin-bottom:2%;">
                <label>Senha</label>
                    <input type="password" required name="password" autofocus value="{{$usuario->USUARIO_NOME}}">
                </div>


            </fieldset>


        <div style="text-align:center">
            <br>

            <button type="submite">
                Salvar
            </button>
        </div>
    </form>

    <a href="{{ route('pedido.show') }}">
    <button>Ver pedidos</button>
</a>
    </main>
@endsection
