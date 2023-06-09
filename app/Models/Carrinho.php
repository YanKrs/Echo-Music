<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carrinho extends Model
{
    use HasFactory;

    protected $fillable = ['USUARIO_ID' , 'PRODUTO_ID' , 'ITEM_QTD'];
    protected $table = 'CARRINHO_ITEM';
    public $timestamps = false;
    // timestamps serve para não pegar o horário atual de quando salva algo no banco, que por padrão vem ativo no laravel

    public function Produto(){
        return $this->belongsTo(Produto::class,'PRODUTO_ID','PRODUTO_ID');
   }

   protected function setKeysForSaveQuery($query){
        $query->where('USUARIO_ID', $this->getAttribute('USUARIO_ID'))
                ->where('PRODUTO_ID',$this->getAttribute('PR2O_ID'));

                return $query;
   }

}
