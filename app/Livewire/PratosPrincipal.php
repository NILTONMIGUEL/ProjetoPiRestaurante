<?php

namespace App\Livewire;

use Livewire\Component;

use App\Models\Produtos;

class PratosPrincipal extends Component
{
    public function render()
    {
        $produtos = Produtos::all();
        return view('livewire.pratos-principal',compact('produtos'));
    }
}
