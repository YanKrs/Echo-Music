@extends('layout.app')
@section('main')

<h1 style="text-align:center; margin-top:5%">Criar sua conta</h1>

    <form method="POST" action="{{ route('register') }}" style="margin: 5% 30% 2% 30%">
        @csrf

        <!-- Name -->
            <fieldset>
                <div style="margin-bottom:2%;">
                <label>Nome</label>
                    <input type="text" required name="name" autofocus class="form-control">

                </div>
            </fieldset>


            <fieldset>
                <div style="margin-bottom:2%;">
                <label>E-mail</label>
                    <input type="email" required name="email" autofocus class="form-control">
                </div>

            </fieldset>

            <fieldset>

                <div style="margin-bottom:2%;">
                <label >CPF</label>
                        <input type="text" name="cpf" maxlength="11" mminlength="11" class="form-control">
                </div>


            </fieldset>





            <fieldset>

                <div style="margin-bottom:2%;">
                <label>Senha</label>
                    <input type="password" required name="password" autofocus class="form-control">
                </div>


            </fieldset>

            <div style="text-align:center">


            <button class="btn btn-success">
                Registrar
            </button>
        </div>
    </form>
    </main>
@endsection
