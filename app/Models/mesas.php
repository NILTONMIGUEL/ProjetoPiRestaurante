<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\descricao;

class mesas extends Model
{
    //
    protected $fillable = [
        'numero',
        'id_descricao',
    ];


    public function descricao(){
        return $this->belongsTo(descricao::class , 'id_descricao');
    }
    
}
