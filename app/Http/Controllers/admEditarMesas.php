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
}
