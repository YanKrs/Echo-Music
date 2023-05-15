<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class EnderecoController extends Controller
{
    public function store(Request $request, Endereco $enderecos){
        $endereco = Endereco::where('USUARIO_ID', Auth::user()->USUARIO_ID)
        ->where('ENDERECO_ID',$enderecos->ENDERECO_ID)->first();
        if(!$endereco){
            $endereco = $endereco->create([
                'ENDERECO_NOME' => $request->nome,
                'ENDERECO_LOGRADOURO' => $request->logradouro,
                'ENDERECO_NUMERO' => $request->numero,
                'ENDERECO_COMPLEMENTO' => $request->complemento,
                'ENDERECO_CEP' => $request->cep,
                'ENDERECO_CIDADE' => $request->cidade,
                'ENDERECO_ESTADO' => $request->estado,
                'ENDERECO_APAGADO' => 0
            ]);
}
    }
}
