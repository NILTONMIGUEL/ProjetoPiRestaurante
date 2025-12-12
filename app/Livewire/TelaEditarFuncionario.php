<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;
use App\Models\Cargos;

class TelaEditarFuncionario extends Component
{

    public $id;

    public $nome;
    public $email;
    public $senha;
    public $cargo;


    public function mount($id){
        $this->id = $id;
        //pegando meu funcionario e deixando os campos preenchidos
        $funcionario = User::find($id);

    if ($funcionario) {
        $this->nome  = $funcionario->name;
        $this->email = $funcionario->email;
        $this->cargo = $funcionario->id_cargo;

        // senha sempre começa vazia
        $this->senha = '';
    }
}

    public function editar(){

        
        $this->validate([
            'nome' => 'required',
            'email' => 'required|email|unique:users,email'.$this->id,
            'senha' => 'nullable|min:6',
            'cargo' => 'required',
        ]);

        //pegando meu funcionario
        $usuarioEditar = User::find($this->id);

        if(!$usuarioEditar){
            session()->flash('erro','funcionario não encontrado');
            return redirect()->route('admin-funcionarios');
        }

        $usuarioEditar->name = $this->nome;
        $usuarioEditar->email = $this->email;
        $usuarioEditar->password = bcrypt($this->senha);
        $usuarioEditar->id_cargo = $this->cargo;

        $usuarioEditar->save();
        return redirect()->route('admin-funcionarios');


    }


    public function render()
    {
        $funcionario = User::where('id',$this->id)->first();
        $cargos = Cargos::all();
        return view('livewire.tela-editar-funcionario',[
            'funcionario' => $funcionario,
            'cargos' => $cargos,
        ]);
    }
}
