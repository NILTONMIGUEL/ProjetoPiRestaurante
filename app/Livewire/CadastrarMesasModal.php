<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\descricao;
use App\Models\mesas;

class CadastrarMesasModal extends Component
{

    //método para o botão de cancelar modal
    public function cancelar_mesaModal(){
        //retornar para a rota das mesas
        return redirect()->route('adm.cadastrarMesas');
    }

    //criando as variaveis que irão receber dados do formulario 
    public $numero;
    public $status;

    //criando o método salvar
    public function salvar(){
        $this->validate([
            //o numero da mesa é obrigatorio , unico : componente , campo do formulario
           'numero' => 'required|unique:mesas,numero',
           'status' => 'required', //requerido e campo do formulario
        ]); 

        mesas::create([
            'numero' => $this->numero,
            'id_descricao' => $this->status,
            'created_at' => date('Y-m-d H:i:s'),
        ]);

        $this->reset('numero','status');

        session()->flash('message', 'cadastro salvo com sucesso!');
        
        return redirect()->route('adm.cadastrarMesas');
    }
    

    public function render()
    {
        //me retornando a minha descrição
        $descricao = descricao::all();
        return view('livewire.cadastrar-mesas-modal',[
            'descricao' => $descricao,
        ]);
    }
}
