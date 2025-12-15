<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Produtos;

class Entradas extends Component
{
    public $id = 1;

   
    
    public function render()
    {
        $produtos = Produtos::where('id_categoriaProdutos',$this->id)->get();
        return view('livewire.entradas',compact('produtos'));
    }
}
