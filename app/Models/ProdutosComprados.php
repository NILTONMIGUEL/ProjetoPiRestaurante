<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\User;
use App\Models\Produtos;


class ProdutosComprados extends Model
{
    //
    protected $table= "produtos_comprados";

    protected $fillable =[
        'imagem',
        'id_produto',
        'id_usuario',
        'quantidade',
        'preco',

    ];
    public function user(){
        return $this->belongsTo(User::class, 'id_usuario');
    }

    public function produto(){
        return $this->belongsTo(Produtos::class, 'id_produto');
    }
}