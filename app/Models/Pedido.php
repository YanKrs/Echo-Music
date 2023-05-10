<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;

    protected $fillable = ['USUARIO_ID', 'STATUS_ID' , 'PEDIDO_DATA'];
    protected $table = "PEDIDO";
    protected $primaryKey = "PEDIDO_ID";
}
