<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\mesas;
use Illuminate\Support\Facades\DB;


class CadastrarMesas extends Component
{
    //salvando minha variavel id
    public $idMesa;
 
    
    public function editarMesas($id){
        $this->idMesa = $id;
        return redirect()->to('admin-editarMesas/'.$this->idMesa);
    }

    public function excluirMesas($idMesa){
       
            $this->idMesa = $idMesa;
            return redirect()->to('admin-excluirMesas/'.$this->idMesa);
    }

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

    public function render()
    {
        //AQUI: Busca todas as mesas no banco de dados e cria paginas 10 por paginas
        
        $mesas = mesas::orderBy('numero', 'asc')->paginate(10);
        
        
        $this->existeMesas();


        return view('livewire.cadastrar-mesas',[
            'mesas' => $mesas,
        ]);
    }
}
