<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\mesas;

class DashboardMesasOcupadas extends Component
{
    public $mesasDisponivel;

    public function mount(){
        $this->mesasDisponivel = mesas::where('id_descricao', 1)->count();
    }


    public function render()
    {

        $mesas = mesas::all()->count();

        return view('livewire.dashboard-mesas-ocupadas',[
            'mesas' => $mesas,
        ]);
    }
}
