<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carrinho;
use App\Models\Produto;
use Illuminate\Support\Facades\Auth;

class PedidoController extends Controller
{
    public function store(){
        $produtoCarrinho = Carrinho::where('USUARIO_ID', Auth::user()->USUARIO_ID)->pluck('PRODUTO_ID');


        return view('pedido.index')->with(['pedido'=> $produtoCarrinho]);
    }
}
