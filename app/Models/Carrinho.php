<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\User;
use App\Models\Produtos;

class Carrinho extends Model
{
   protected $table = 'carrinhos';

    protected $fillable = [
        'imagem',
        'id_usuario',
        'id_produto',
        'preco',
        'quantidade',
    ];

    public function user(){
        return $this->belongsTo(User::class, 'id_usuario');
    }

    public function produto(){
        return $this->belongsTo(Produtos::class, 'id_produto');
    }
    
}
