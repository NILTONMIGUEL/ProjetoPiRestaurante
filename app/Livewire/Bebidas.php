<?php

namespace App\Livewire;

use Livewire\Component;

use App\Models\Produtos;

class Bebidas extends Component
{
    public function render()
    {
        $produtos = Produtos::all();
        return view('livewire.bebidas', compact('produtos'));
    }
}
