<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;

class TelaExcluirFuncionario extends Component
{
    public $id;

    public function mount($id){

        $this->id = $id;
    }

    public function excluir($id){
        
        $funcionario = User::find($id);

        if(!$funcionario){
            session()->flash('message','funcionario não encontrado');
            return redirect()->route('admin-funcionarios');
        }

        $funcionario->delete();
        session()->flash('message','funcionario excluido com sucesso');
        return redirect()->route('admin-funcionarios');
    }

    public function render()
    {
        $funcionario = User::where('id',$this->id)->first(); 
        return view('livewire.tela-excluir-funcionario',[
            'funcionario' => $funcionario,
        ]);
    }
}
