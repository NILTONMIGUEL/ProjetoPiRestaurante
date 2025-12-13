<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads; // <<<< 1. Importar o Trait
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Storage;

use App\Models\CategoriaProduto;
use App\Models\Produtos;

class CadastrarProdutos extends Component
{
    use WithFileUploads;



    public $imagem;
    public $nome;
    public $descricao;
    public $preco;
    public $categoria;
    public $imagemPath;

    public function cadastrarProdutos(){

        $this->validate([
            'imagem' => [
            'required','image','max:2048', // Mantém o limite de tamanho (2MB)
            // AQUI ESTÁ A REGRA DE DIMENSÕES:
            'dimensions:min_width=1600,min_height=900,max_width=1600,max_height=900'],
            'nome' => 'required|max:100',
            'descricao' => 'required|max:255',
            'preco' => 'required|numeric|min:0.01',
            'categoria' => 'required',
        ]);
        
       
        try{
            $novoNome = rand(0,999999). '-' . $this->imagem->getClientOriginalName();
            $this->imagePath = $this->imagem->storeAs('produtos', $novoNome ,'public');

            
            Produtos::create([
                'imagem' => $this->imagePath,
                'nome' => $this->nome,
                'descricao' => $this->descricao,
                'preco' => $this->preco,
                'id_categoriaProdutos' => $this->categoria,

            ]);

            return redirect()->route('admin-produtos');
            

        }
        catch(\Exception $ex){
            session()->flash('error', 'Ocorreu um erro ao salvar o produto: ' . $ex->getMessage());
        }
    }

    public function render()
    {

        $categoriaProd = CategoriaProduto::all();

        
        return view('livewire.cadastrar-produtos',[
            'categoriaProduto' => $categoriaProd,
        ]);
    }
}
