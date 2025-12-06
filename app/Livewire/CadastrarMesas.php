<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\mesas;

class CadastrarMesas extends Component
{

    public function render()
    {
        //AQUI: Busca todas as mesas no banco de dados e cria paginas 10 por paginas
        $mesas = mesas::paginate(10);

        return view('livewire.cadastrar-mesas',[
            'mesas' => $mesas,
        ]);
    }
}
