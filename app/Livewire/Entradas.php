<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Produtos;
use App\Models\carrinho;

class Entradas extends Component
{
    public $id = 1;

    public $usuarioId;
    public $numeroMesa;

    public $userId = 2;

    public function adicionar($idProduto)
    {
    // $usuarioId = Auth::id(); // ou session('usuarioId')
     

    //$usuario = User::where('id_cargo',2)->get();



    // 1️⃣ Verifica se o item já existe no carrinho
    $item = Carrinho::where('id_usuario', $this->userId)
        ->where('id_produto', $idProduto)
        ->first();

    // 2️⃣ Se existir, soma +1
    if ($item) {
        $item->increment('quantidade');
    } 
    // 3️⃣ Se não existir, cria
    else {
        carrinho::create([
            'imagem' => Produtos::find($idProduto)->imagem,
            'id_usuario' => $this->userId,
            'id_produto' => $idProduto,
            'quantidade' => 1,
            'preco' => Produtos::find($idProduto)->preco,
        ]);
       
    }
     
    return redirect()->route('cardapio.digital');
}
       
    public function render()
    {
        $produtos = Produtos::where('id_categoriaProdutos',$this->id)->get();
        return view('livewire.entradas',compact('produtos'));
    }
}
