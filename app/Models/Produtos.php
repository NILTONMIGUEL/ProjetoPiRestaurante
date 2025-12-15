<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\Carrinho;

class Produtos extends Model
{
    protected $fillable =[
        'imagem',
        'nome',
        'descricao',
        'preco',
        'id_categoriaProdutos',

    ];

    protected $table = 'produtos';

    public function CategoriaProduto(){
        return $this->belongsTo(CategoriaProduto::class , 'id_categoriaProdutos');
    }
    
}
