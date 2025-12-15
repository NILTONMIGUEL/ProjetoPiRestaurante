<?php

namespace App\Livewire;

use Livewire\Component;

use App\Models\Produtos;

class PratosPrincipais extends Component
{
    public $id = 2;
    public function render()
    {
        $produtos = Produtos::where('id_categoriaProdutos',$this->id)->get();
        return view('livewire.pratos-principais',compact('produtos'));
    }
}
