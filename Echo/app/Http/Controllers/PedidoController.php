<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carrinho;
use App\Models\Produto;
use App\Models\Pedido;
use App\Models\PedidoItem;
use App\Models\PedidoStatus;
use App\Models\ProdutoEstoque;
use Illuminate\Support\Facades\Auth;

class PedidoController extends Controller
{
    public function store(Carrinho $carrinho){
        $produtos = $carrinho::where('USUARIO_ID', Auth::user()->USUARIO_ID)->where('ITEM_QTD', '!=', 0)->get();
         if(count($produtos) > 0){
        $pedido = Pedido::create([
            'USUARIO_ID' => Auth::user()->USUARIO_ID ,
            'STATUS_ID' => 4,
            'PEDIDO_DATA' => now()
        ]);
        foreach ($produtos as $produto) {

            $estoque = ProdutoEstoque::where('PRODUTO_ID', $produto->PRODUTO_ID)->first();
            if($estoque->PRODUTO_QTD >= $produto->ITEM_QTD){
                $estoque->update([
                    'PRODUTO_QTD' => $estoque->PRODUTO_QTD - $produto->ITEM_QTD
                ]);
            $pedidoitem = PedidoItem::create([
                    'PRODUTO_ID' => $produto->Produto->PRODUTO_ID,
                    'PEDIDO_ID' => $pedido->PEDIDO_ID,
                    'ITEM_QTD' => $produto->ITEM_QTD,
                    'ITEM_PRECO' => floatval($produto->Produto->PRODUTO_PRECO)
            ]);
        }else{

        return view('pedido.fail');
    }

            $produto->update([
                'ITEM_QTD' => 0
            ]);
        }

        $todosPedidos = Pedido::where('USUARIO_ID' , Auth::user()->USUARIO_ID)->get();

        return redirect()->route('pedido.show');
    }

    else{
        return redirect()->route('dashboard');
    }
        }

        public function show(PedidoStatus $status){

            $todosPedidos = Pedido::where('USUARIO_ID' , Auth::user()->USUARIO_ID)->get();





            return view('pedido.show')->with(['pedidos'=> $todosPedidos]);

        }

    }



