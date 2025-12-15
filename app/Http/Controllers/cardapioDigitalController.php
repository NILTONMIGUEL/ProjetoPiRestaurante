<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\mesas;

class cardapioDigitalController extends Controller
{
    public function index(){
        
        // $mesa = mesas::where('numero',$id)->first();
           
        //$mesa->id_descricao = 2;
        // $mesa->save();
        return view('cardapio.digital');
    }
    public function logar(Request $request){
        
        $request->validate([
            'id'   => 'required|integer',
            'mesa' => 'required|integer',
        ]);

        session()->flash([
            'usuarioId'  => $request->id,
            'numeroMesa' => $request->mesa,
        ]);

        return redirect()->route('cardapio.digital');
    }
   
   
}
