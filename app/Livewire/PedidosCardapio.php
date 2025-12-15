<?php

namespace App\Livewire;

use Livewire\Component;

use App\Models\ProdutosComprados;

class PedidosCardapio extends Component
{
    public function render()
    {
        $produtos = ProdutosComprados::all();
        return view('livewire.pedidos-cardapio',compact('produtos'));
    }
}
