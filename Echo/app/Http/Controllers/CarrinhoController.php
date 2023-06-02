<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;
use App\Models\Carrinho;
use Illuminate\Support\Facades\Auth;

class CarrinhoController extends Controller
{
    public function store(Produto $produto, Request $request){
        $item = Carrinho::where('USUARIO_ID', Auth::user()->USUARIO_ID)
        ->where('PRODUTO_ID', $produto->PRODUTO_ID)->first();

        if($item){
            $item = $item->update([
                'ITEM_QTD' => $item-> ITEM_QTD + 1
            ]);
        }else{
            $item = Carrinho::create([
                'USUARIO_ID' => Auth::user()->USUARIO_ID,
                'PRODUTO_ID' => $produto->PRODUTO_ID,
                'ITEM_QTD' =>$request->quantidade
            ]);
        }

        return redirect (route('carrinho.index'));
    }

    public function index(){
            $carrinho = Carrinho::where('USUARIO_ID', Auth::user()->USUARIO_ID)->where('ITEM_QTD', '<>', 0)->get();





            return view('carrinho.index')->with('carrinho', $carrinho);
        }

        public function remove(Produto $produto){

            $item = Carrinho::where('USUARIO_ID', Auth::user()->USUARIO_ID)->where('PRODUTO_ID' , $produto->PRODUTO_ID)->first();;

            if ($item) {
                $item = $item->update([
                    'ITEM_QTD' => 0
                ]);
            }

            return redirect()->route('carrinho.index');
        }


}
