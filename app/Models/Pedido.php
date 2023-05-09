<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;
    protected $table = "PEDIDO";
    protected $primaryKey = "PEDIDO_ID";

    $item = Pedido::where('USUARIO_ID', Auth::user()->USUARIO_ID)
        ->where('PRODUTO_ID', $produto->PRODUTO_ID)


}
