<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Produtos;
use Illuminate\Support\Facades\DB;

class VisualizarProdutos extends Component
{
 public function existeMesas(){
        if(DB::table('mesas')->count() === 0){
            // 2. Redefine o contador do SQLite para que o próximo ID seja 1
            DB::update("UPDATE sqlite_sequence SET seq = 0 WHERE name = 'mesas'");
        
            // Opcional: Feedback
            session()->flash('info', 'O contador de mesas foi reiniciado para 1.');
        
            return true; // Retorna true se a redefinição ocorreu
        }
        return false;
    }

    public function existeProdutos(){
        if(DB::table('produtos')->count() === 0){
            DB::update("UPDATE sqlite_sequence SET seq = 0 WHERE name = 'produtos'");

            session()->flash('info','o contador de produtos foi reiniciado para 1');

            return true;
        }
    }
    public function render()
    {   $Produtos = Produtos::all();

        $this->existeProdutos();
        return view('livewire.visualizar-produtos',[
            'produtos' => $Produtos,
        ]);
    }
}
