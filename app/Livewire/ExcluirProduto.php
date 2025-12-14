<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Produtos;

class ExcluirProduto extends Component
{

    public $id;

    public function mount($id){
        $this->id = $id;
    }

    public function excluirProduto(){

        $produto = Produtos::find($this->id);

        $produto->delete();

        return redirect()->route('admin-produtos')->with('success','produto excluido com sucesso');
    }

    public function render()
    {
        $produto = Produtos::find($this->id);
        return view('livewire.excluir-produto',compact('produto'));
    }
}
