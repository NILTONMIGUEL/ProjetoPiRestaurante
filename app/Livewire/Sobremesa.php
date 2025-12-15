<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Produtos;

class Sobremesa extends Component
{
    public $id = 3;

    public function render()
    {
        $produtos = Produtos::where('id_categoriaProdutos',$this->id)->get();
        return view('livewire.sobremesa',compact('produtos'));
    }
}
