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
        foreach ($produtos as $produto) {
            $pedidoitem = PedidoItem::create([
                    'PRODUTO_ID' => $produto->Produto->PRODUTO_ID,
                    'PEDIDO_ID' => $pedido->PEDIDO_ID,
                    'ITEM_QTD' => $produto->ITEM_QTD,
                    'ITEM_PRECO' => floatval($produto->Produto->PRODUTO_PRECO)
            ]);

            $produto->update([
                'ITEM_QTD' => 0
            ]);
        }

        return view('pedido.status')->with(['pedido'=> $pedido]);

    }



        }




    }

    // $pedidos = Pedido::where('USUARIO_ID', Auth::user()->USUARIO_ID)->get();

    // return redirect()->route('pedido.index')->with('pedidos', $pedidos)->with('numPedido' , $pedido);

// public function index(PedidoItem $item){

//     $pedidos = Pedido::where('USUARIO_ID', Auth::user()->USUARIO_ID)->get();

//     $itens;
//     foreach($pedidos as $foreachPedidos){

//         $itens = $item::where('PEDIDO_ID', $foreachPedidos);

//     }




//     return view('pedido.index')->with(['pedido'=> $pedidos, 'item'=>$itens]);

// }

// }




