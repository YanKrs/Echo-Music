<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProdutoEstoque extends Model
{
    use HasFactory;
    protected $table = "PRODUTO_ESTOQUE";
    protected $fillable = ['PRODUTO_ID', 'PRODUTO_QTD'];
    protected $primaryKey = "PRODUTO_ID";
    public $timestamps = false;
    public function produtos(): HasOne{
        return $this->hasOne(Produto::class, 'PRODUTO_ID', 'PRODUTO_ID');
    }
}
