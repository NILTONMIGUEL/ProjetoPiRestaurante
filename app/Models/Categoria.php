<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Categoria extends Model
{
    //criando os dados

    protected $fillable=[
        'nome',
    ];

    protected $table = 'categoria';

    public function users()
    {
        // Uma categoria TEM MUITOS usuários
        return $this->hasMany(User::class);
    }
}
