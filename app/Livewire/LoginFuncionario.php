<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class LoginFuncionario extends Component
{

   public $email;
   public $password;

    public function login(){

        $this->validate([
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

        $autenticated = Auth::attempt([
            'email' => $this->email,
            'password' => $this->password,
            'id_categoria' => [1 , 2] 
        ]);

        if($autenticated){
            return redirect()->route('painel-admin');
        }
        else{
            session()->flash('error' , 'email ou senha invalidas');
        }
    }


    public function render()
    {
        return view('livewire.login-funcionario');
    }
}
