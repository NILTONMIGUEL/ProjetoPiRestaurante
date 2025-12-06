<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\descricao;
use App\Models\mesas;

class CadastrarMesasModal extends Component
{


    public function cancelar_mesaModal(){
        return redirect()->route('adm.cadastarMesas');
    }


    public $numero;
    public $status;

    public function salvar(){
        $this->validate([
           'numero' => 'required|unique:mesas,numero',
           'status' => 'required',
        ]); 

        mesas::create([
            'numero' => $this->numero,
            'id_descricao' => $this->status,
            'created_at' => date('Y-m-d H:i:s'),
        ]);

        $this->reset('numero','status');

        session()->flash('message', 'cadastro salvo com sucesso!');
        
        return redirect()->route('adm.cadastarMesas');
    }
    

    public function render()
    {

        $descricao = descricao::all();
        return view('livewire.cadastrar-mesas-modal',[
            'descricao' => $descricao,
        ]);
    }
}
