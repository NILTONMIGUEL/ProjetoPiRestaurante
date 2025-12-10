<?php

namespace App\Livewire;

use Livewire\Component;
//importando a biblioteca Auth
use Illuminate\Support\Facades\Auth;

class LoginFuncionario extends Component
{

   public $email; //criando as variaveis para guardar os dados do formulario 
   public $password;

    public function login(){ //método login 

        //fazendo validação ele retorna mensagem de erro caso der erros
        $this->validate([
            'email' => 'required|email', //variavel email recebe o campo email formulario
            'password' => 'required|min:6' //variavel password recebe o valor do password formulario
        ]);

        //verificando se os dados enviados bate com o que temos no banco de dados
        $autenticated = Auth::attempt([
            'email' => $this->email,
            'password' => $this->password,
            'id_categoria' => [1 , 2],
            'id_cargo' => [1,2,3,4],
        ]);

        //caso for true 
        if($autenticated){
            //me retorne a rota painel-admin
           if(in_array(Auth::user()->{'id_cargo'},[1,2])){
                
                return redirect()->route('funcionario.painel')->with('error', 'Acesso negado Só os ADM tem acesso.');
            }
           else if(in_array(Auth::user()->{'id_cargo'},[3,4])){
                return redirect()->route('painel-admin')->with('error', 'Acesso negado Só os ADM tem acesso.');
           }
        }
        else{
            //caso de erro me retorne uma mensagem de erro
            session()->flash('error' , 'email ou senha invalidas');
        }
    }


    public function render()
    {
        return view('livewire.login-funcionario');
    }
}
