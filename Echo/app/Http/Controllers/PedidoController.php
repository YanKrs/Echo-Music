<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carrinho;
use App\Models\Produto;
use App\Models\Pedido;
use App\Models\PedidoItem;
use Illuminate\Support\Facades\Auth;

class PedidoController extends Controller
{
    public function store(Carrinho $carrinho){
        $produtos = $carrinho::where('USUARIO_ID', Auth::user()->USUARIO_ID)->where('ITEM_QTD', '!=', 0)->get();

        if($produtos){
        $pedido = Pedido::create([
            'USUARIO_ID' => Auth::user()->USUARIO_ID ,
            'STATUS_ID' => 1,
            'PEDIDO_DATA' => now()

        ]);

        foreach($produtos as $produto){

            if($produto->Produto->PRODUTO_ATIVO){

                $estoque = Estoque::where('PRODUTO_ID', $produto->PRODUTO_ID)->first();

                if($estoque->PRODUTO_QTD >= $produto->ITEM_QTD){
                    $estoque->update([
                        'PRODUTO_QTD' => $estoque->PRODUTO_QTD - $produto->ITEM_QTD
                    ]);
                    $pedidoitem = PedidoItem::create([
                        'PRODUTO_ID' => $produto->Produto->PRODUTO_ID,
                        'PEDIDO_ID' => $pedido->PEDIDO_ID,
                        'ITEM_QTD' => $produto->ITEM_QTD,
                        'ITEM_PRECO' => floatval($produto->Produto->getPrecoDesconto())
                    ]);

                }
            }
            
            $produto->update([
                'ITEM_QTD' => 0
            ]);



        }


    }


}

public function show(){

    $pedidos = Pedido::where('USUARIO_ID', Auth::user()->USUARIO_ID)->get();

    return view('pedido.index')->with(['pedido'=> $pedidos]);

}

}






// public function show(PedidoItem $itensPedido){
//     $itens = $itensPedido::where('PEDIDO_ID', )->get();

//     return view('pedido.show')->with(['itens'=> $itens]);
// }
