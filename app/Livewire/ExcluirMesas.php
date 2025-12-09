<?php

namespace App\Livewire;

use Livewire\Component;

use App\Models\mesas;

class ExcluirMesas extends Component
{
    public $id;
    public $mesaNumero;


    public function mount($id , $mesa){
        $this->id = $id;
        $this->mesaNumero = $mesa->numero;
    }

    public function excluir($id){
        //encontrando minha mesa com o meu id

        $mesa = mesas::find($id);
    
        if(!$mesa){
            session()->flash('error', 'O post não foi encontrado.');
            return;
        }
        //excluido a mesa
        $mesa->delete();
        session()->flash('message', 'Post excluído com sucesso!');
        return redirect()->to('adm-cadastrarMesas');
    }

    public function cancelar(){
       return redirect()->route('adm.cadastrarMesas');
    }

    public function render()
    {
        return view('livewire.excluir-mesas');
    }
}
