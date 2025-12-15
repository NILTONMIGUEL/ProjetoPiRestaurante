<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Carrinho as CarrinhoModel;
use App\Models\ProdutosComprados;


class Carrinho extends Component
{


   public $userId = 2;

    public function incrementar($id){
        $carrinho = carrinhoModel::find($id);
        
        $carrinho->quantidade++;
        $carrinho->save();
    }
    public function decrementar($id){
       $carrinho = carrinhoModel::find($id);
        if($carrinho->quantidade >=1){
            $carrinho->quantidade--;
            $carrinho->save();
        }
        else{
            $carrinho->delete();
        }
        
    }


    public function fazerPedido(){

        $produtosComprados = CarrinhoModel::all();

        foreach($produtosComprados as $produto){

           ProdutosComprados::create([
                'imagem' => $produto->imagem,
                'id_produto' => $produto->id_produto,
                'id_usuario' => $produto->id_usuario,
                'quantidade' => $produto->quantidade,
                'preco' => $produto->preco,
           ]);
        }
        CarrinhoModel::truncate(); // apaga todos os registros e reinicia ID

        session()->flash('mensagem', 'Dados migrados com sucesso!');



    }
    
    public function render()
    {
        $produtos = CarrinhoModel::all();
        $precoTotal = CarrinhoModel::sum(\DB::raw('preco * quantidade'));
        return view('livewire.carrinho',compact('produtos','precoTotal'));
    }
}
