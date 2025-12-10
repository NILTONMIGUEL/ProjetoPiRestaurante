<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;

class Funcionarios extends Component
{
    public function render()
    {
        $funcionarios = User::orderBy('id_cargo', 'asc')->paginate(6);
        return view('livewire.funcionarios',[
            'funcionarios' => $funcionarios,
        ]);
    }
}
