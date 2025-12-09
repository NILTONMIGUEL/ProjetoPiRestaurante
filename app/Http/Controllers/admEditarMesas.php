<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\mesas;
class admEditarMesas extends Controller
{
    public function index($id){
        return view ('adm.editarMesas',[
            'id' => $id,
        ]);
    }

    public function excluir($id){
      
        $mesa = mesas::find($id);
        return view ('adm.excluirMesas',[
            'id' => $id,
            'mesa' => $mesa,
        ]);
        
    }

    public function cadastrarMesas(){
        return view('adm.cadastrarMesas');
    }
}
