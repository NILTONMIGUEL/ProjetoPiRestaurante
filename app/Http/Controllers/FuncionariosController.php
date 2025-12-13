<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FuncionariosController extends Controller
{
    public function editarFuncionario($id){
        
        return view('adm.telaEditarFuncionario',[
            'id' => $id,
        ]);
    }

    public function excluirFuncionario($id){
        return view('adm.telaExcluirFuncionario',[
            'id' => $id,
        ]);
    }
     
}
