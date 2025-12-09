<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use App\Models\mesas;


class descricao extends Model
{
    //
    
    protected $fillable = [
        'nome',
    ]; 

    protected $table = 'descricao';

    public function mesas(){
        return $this->belongsTo(mesas::class);
    }
}
