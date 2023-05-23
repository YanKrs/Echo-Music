<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Endereco;
use App\Models\Pedido;
use Illuminate\Support\Facades\Auth;


class EnderecoController extends Controller
{
    public function store(){

        $endereco = Endereco::where('USUARIO_ID' , Auth::user()->USUARIO_ID)->first();

            return view('endereco.index', compact('endereco'));



    }


    public function save(Request $request)
    {

        $usuario = Auth::user()->USUARIO_ID;
        $endereco = Endereco::where('USUARIO_ID', Auth::user()->USUARIO_ID)
        ->where('USUARIO_ID', $usuario)->first();



        if($endereco){
            $endereco =$endereco->update([
                'USUARIO_ID'=> (int)$usuario,
                'ENDERECO_NOME'=> $request->Endereco_nome,
                'ENDERECO_LOGRADOURO'=> $request->Logradouro,
                'ENDERECO_NUMERO'=> (int)$request->Numero,
                'ENDERECO_COMPLEMENTO'=> $request->Complemento,
                'ENDERECO_CEP'=> $request->Cep,
                'ENDERECO_CIDADE'=> $request->Cidade,
                'ENDERECO_ESTADO'=> $request->Estado,
                'ENDERECO_APAGADO'=> 1
            ]);
        }

            else{
                Endereco::create([
                'USUARIO_ID'=> (int)$usuario,
                'ENDERECO_NOME'=> $request->Endereco_nome,
                'ENDERECO_LOGRADOURO'=> $request->Logradouro,
                'ENDERECO_NUMERO'=> (int)$request->Numero,
                'ENDERECO_COMPLEMENTO'=> $request->Complemento,
                'ENDERECO_CEP'=> $request->Cep,
                'ENDERECO_CIDADE'=> $request->Cidade,
                'ENDERECO_ESTADO'=> $request->Estado,
                'ENDERECO_APAGADO'=> 1
                ]);
            }



            return view('endereco.show');
    }
}