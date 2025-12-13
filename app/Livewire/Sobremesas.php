<?php

namespace App\Livewire;

use Livewire\Component;

use App\Models\Produtos;

class Sobremesas extends Component
{
    public function render()
    {
        $produtos = Produtos::all();
        return view('livewire.sobremesas',[
            'produtos' => $produtos,
        ]);
    }
}
