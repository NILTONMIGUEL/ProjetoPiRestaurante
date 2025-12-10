<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\mesas;

class DashboardMesasOcupadas extends Component
{
    //criando a variavel para mostrar as mesas disponiveis 
    public $mesasOcupadas;

    //método mount é executado automaticamente quando o componente é iniciado
    public function mount(){
        //guardando a quantidade de messas com id 1
        $this->mesasOcupadas = mesas::where('id_descricao', 2)->count();
    }


    public function render()
    {
        //voltando a quantidade de mesas que tenho no banco de dados
        $mesas = mesas::all()->count();

        return view('livewire.dashboard-mesas-ocupadas',[
            'mesas' => $mesas,
        ]);
    }
}
