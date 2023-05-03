<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;
use App\Models\Categoria;



class ProdutoController extends Controller
{
    public function index(){
        $produtos = Produto::all();
        return view('produto.index')->with('produtos', $produtos);
    }
    public function show(Produto $produto){
        $maisProdutos = categoria::find($produto->CATEGORIA_ID)->Produtos;

        return view('produto.show')->with(['produto'=> $produto, 'maisProdutos'=> $maisProdutos]);


        return view('/dashboard')->with(['produto'=> $produto, 'maisProdutos'=> $maisProdutos]);

    }
}
