<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class Cargos extends Model
{
    protected $fillable = [
        'nome',
    ];

    protected $table = 'cargos';

    public function users(){
        //um cargo tem muitos usuarios
        return $this->hasMany(User::class);
    }
}
