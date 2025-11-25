<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class LoginCliente extends Component
{

    private $password;
    private $email;
    public function login(){
        
        $this->validate([
            'password' => 'required|min:8',
            'email' => 'required|email'

        ]);

        //fazendo a verificação
        $autenticado = Auth::attempt([
            'email' => $this->email,
            'password' => $this->password
        ]);

        //checando se me existe esses valores 
        if($autenticado){
            return redirect()->route(''); //lembrar de passar a roda do dashboard
        }
        else{
            session()->flash('error' , 'email ou senha invalidas');
        }

    }



    public function render()
    {
        return view('livewire.login-cliente');
    }
}
