<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class produtosController extends Controller
{
    public function editarProduto($id){


        return view('adm.editarProduto',[
            'id' => $id,
        ]);
        
    }

    public function excluirProduto($id){

        return view ('adm.excluirProduto',[
            'id' => $id,
        ]);
    }
}
