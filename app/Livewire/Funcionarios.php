<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;

class Funcionarios extends Component
{

    public function editarFuncionario($id){

        return redirect()->route('admin-editarFuncionario',$id);
    }

    public function render()
    {
        $funcionarios = User::orderBy('id_cargo', 'asc')->paginate(20);
        return view('livewire.funcionarios',[
            'funcionarios' => $funcionarios,
        ]);
    }
}
