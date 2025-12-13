<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Cargos;
use App\Models\User;

class TelaCadastrarFuncionario extends Component
{
    public $nome;
    public $email;
    public $senha;
    public $id_categoria = 2;
    public $cargoId;

    public function cadastrar(){
         
       
    
        $this->validate([
            'nome' => 'required',
            'email' => 'required|email|unique:users,email',
            'senha' => 'required|min:6',
            'cargoId' => 'required',
        ]);
        
        User::create([
            'name' => $this->nome,
            'email' => $this->email,
            'password' => bcrypt($this->senha),
            'id_categoria' => $this->id_categoria,
            'id_cargo' => $this->cargoId,
            'created_at' => now(),
            'updated_at' => now(),

        ]);


        $this->reset('nome','email','senha','id_categoria','cargoId');
        
        session()->flash('message','funcionario cadastrado com sucesso!');


        return redirect()->route('admin-funcionarios');
       
    }


    public function render()
    {   $cargo = Cargos::all();
        return view('livewire.tela-cadastrar-funcionario',compact('cargo'));
    }
}
