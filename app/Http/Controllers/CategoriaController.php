<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;


class CategoriaController extends Controller
{
    public function index(){
        $categorias = Categoria::all();
        return view('categoria.index')->with('categorias', $categorias);
    }

    // O parâmetro $categoria, como ele recebe algum dado? pois não tem GET em nenhum momento para pegar o ID da categoria q o usuário escolher no site
        public function show(Categoria $categoria){
        return view('categoria.show')->with('categoria', $categoria);
    }
}
