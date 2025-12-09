<?php

namespace App\Livewire;

use Livewire\Component;

use App\Models\mesas;
use App\Models\descricao;

class EditarMesas extends Component
{
    //guardar o dado do id que vejo da blade view de outra página
    public $idMesa;

    //variaveis para receber os dados que irá mudar
    public $status;
    public $numero;
    
    //método para pegar todos os dados que enviamos para o livewire
    public function mount($idMesa){

        // Encontra a mesa ou falha (retorna erro 404)
        $mesa = mesas::findOrFail($idMesa);
        
        //preenchendo meus valores
        $this->idMesa = $idMesa;
        $this->numero = $mesa->numero;
        $this->status = $mesa->id_descricao;
        
    }

    //criando o método de salvar e editar o produto
    public function salvar(){

        //me retornando minha mesa cujo id é o meu id
        $mesas = mesas::where('id',$this->idMesa); 
        

        //fazendo a validação , lembrar que me retorna erro se caso der errado
        $this->validate([
            'numero' => 'required|unique:mesas,numero,'.$this->idMesa, //passando meu id já registrado para poder editar
            'status' => 'required|integer', //garantindo minha chave estrangeira é um int
        ]);
         
        //3. BUSCAR o objeto Model para edição
        // Você precisa usar 'find()' ou 'findOrFail()' para obter o OBJETO, não o Query Builder.
        $mesaParaEditar = mesas::find($this->idMesa);
        
        //se não existe 
        if(!$mesaParaEditar){
            session()->flash('error', 'Mesa não encontrada para edição.');
            return redirect()->route('adm.cadastarMesas');
        }
       
        // 4. ATUALIZAR as propriedades do objeto Model
        $mesaParaEditar->numero = $this->numero;
        $mesaParaEditar->id_descricao = $this->status;
        
        // 5. SALVAR as alterações no banco de dados
        $mesaParaEditar->save(); 
        
        // 6. Redirecionar
        return redirect()->route('adm.cadastarMesas')->with('success','Mesa editada com sucesso!');
    }
    
    public function render()
    {
        $mesas = mesas::where('id', $this->idMesa)->first();
        $descricao = descricao::all();
        return view('livewire.editar-mesas',[
            'mesas' => $mesas,
            'descricao' => $descricao,
        ]);
    }
}
