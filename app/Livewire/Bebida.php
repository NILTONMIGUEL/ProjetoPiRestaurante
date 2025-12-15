<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Produtos;

class Bebida extends Component
{
    public $id = 4;
    public function render()
    {
        $produtos = Produtos::where('id_categoriaProdutos',$this->id)->get();
        return view('livewire.bebida',compact('produtos'));
    }
}
