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
    public $timestamps = false;

    public function pedidoItem(){
        return $this->hasMany(PedidoItem::class, 'PEDIDO_ID' , 'PEDIDO_ID');
    }

    public function Status(){
        return $this->hasOne(PedidoStatus::class, 'STATUS_ID', 'STATUS_ID');
    }



}
