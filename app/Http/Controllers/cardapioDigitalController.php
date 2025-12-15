<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class cardapioDigitalController extends Controller
{
    public function index(){
        
        return view('cardapio.digital');
    }
   
   
}
