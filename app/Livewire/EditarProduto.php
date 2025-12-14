<?php

namespace App\Livewire;

use Livewire\Component;

use App\Models\Produtos;
use Livewire\WithFileUploads; // <<<< 1. Importar o Trait



class EditarProduto extends Component
{
    use WithFileUploads;
    
    
    public $id;

    public $imagem;
    public $nome;
    public $descricao;
    public $preco;
    //public $imagemPath;

    public function mount($id){
        $this->id = $id;

        $produto = Produtos::find($id);

        $this->nome = $produto->nome;
        $this->descricao = $produto->descricao;
        $this->preco = $produto->preco;
    }

    public function editarProduto(){

       
        $this->validate([
            'imagem' => ['nullable','image','max:2048','dimensions:min_width=1600,min_height=900,max_width=1600,max_height=900',],
            'nome' => 'nullable|string|max:100'.$this->id,
            'descricao' => 'nullable|string',
            'preco' => 'nullable|numeric|min:0.20',
        ]);

        try{

            $produto = Produtos::find($this->id);
            
            if(empty($this->imagem)){
                
                if($produto){
                    $produto->imagem = $produto->imagem;
                    $produto->nome = $this->nome;
                    $produto->descricao = $this->descricao;
                    $produto->preco = $this->preco;

                    $produto->save();

                    return redirect()->route('admin-produtos')->with('success','Produto editado com suceso');

                }
                else{
                    session()->flash('message','erro produto não encontrado');
                    return redirect()->route('admin-produtos');
                }

            }
            else{
                if($produto){

                 
                    $novaImagem =  rand(0,999999).'-'.$this->imagem->getClientOriginalName();
                    $imagemPath = $this->imagem->storeAs('produtos', $novaImagem,'public');
                
                    $produto->imagem = $imagemPath;
                    $produto->nome = $this->nome;
                    $produto->descricao = $this->descricao;
                    $produto->preco = $this->preco;

                    $produto->save();

                    return redirect()->route('admin-produtos')->with('success','Produto editado com suceso');

                }
                else{
                    session()->flash('message','erro produto não encontrado');
                    return redirect()->route('admin-produtos');
                }
            }
        }
        catch(\Exception $ex){

            session()->flash('error','erro ao cadastrar o produto '.$ex);
        }
    }


    public function render()
    {   
        $produto = Produtos::find($this->id);
        return view('livewire.editar-produto',compact('produto'));
    }
}
