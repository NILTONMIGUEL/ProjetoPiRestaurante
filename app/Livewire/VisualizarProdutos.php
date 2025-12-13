<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Produtos;

class VisualizarProdutos extends Component
{
    public function render()
    {   $Produtos = Produtos::all();
        return view('livewire.visualizar-produtos',[
            'produtos' => $Produtos,
        ]);
    }
}
