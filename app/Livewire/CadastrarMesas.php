<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\mesas;

class CadastrarMesas extends Component
{
    //salvando minha variavel id
    public $idMesa;
    
    public function editarMesas($id){
        $this->id = $id;
        return redirect()->to('admin-editarMesas/'.$this->id);
    }

    public function render()
    {
        //AQUI: Busca todas as mesas no banco de dados e cria paginas 10 por paginas
        $mesas = mesas::orderBy('id', 'asc')->paginate(10);
        
        return view('livewire.cadastrar-mesas',[
            'mesas' => $mesas,
        ]);
    }
}
