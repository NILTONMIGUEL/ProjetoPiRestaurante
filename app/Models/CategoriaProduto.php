<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\Produtos;

class CategoriaProduto extends Model
{
    protected $fillable=[
        'nome',
    ];

    protected $table ='categoria_produtos';
    
    public function Produtos(){

        return $this->hasMany(Produtos::class , 'id_categoriaProdutos');
    }

}
