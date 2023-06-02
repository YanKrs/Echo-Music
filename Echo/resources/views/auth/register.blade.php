@extends('layout.app')
@section('main')



    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
         <h1 style="text-align:center">Criar sua conta</h1>
            <fieldset>
                <div style="text-align:center; margin-bottom:2%;">
                <label>Name</label>
                    <input type="text" required name="name" autofocus>

                </div>
            </fieldset>


            <fieldset>
                <div style="text-align:center; margin-bottom:2%;">
                <label>E-mail</label>
                    <input type="email" required name="email" autofocus>
                </div>

            </fieldset>

            <fieldset>

                <div style="text-align:center; margin-bottom:2%;">
                <label>CPF</label>
                        <input type="text" name="cpf" maxlength="11">
                </div>


            </fieldset>





            <fieldset>

                <div style="text-align:center; margin-bottom:2%;">
                <label>Senha</label>
                    <input type="password" required name="password" autofocus>
                </div>


            </fieldset>

            <div style="text-align:center">


            <button>
                Registrar
            </button>
        </div>
    </form>
    </main>
@endsection
