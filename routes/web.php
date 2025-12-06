<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('about');
})->name('/');

Route::get('loginCliente',function(){
    return view('clientes.loginCliente');
})->name('loginCliente');

Route::get('cadastrarCliente',function(){
    return view('clientes.cadastrarCliente');
})->name('cadastrarCliente');

Route::get('/admin',function(){
    return view ('adm.loginFuncionario');
})->name('login'); //<- importante ser o nome login da rota para poder funcionar o middlware




//criando o cardapio digital

Route::get('/cardapio-digital/{id}',function(){
    return view('cardapioDigital');
})->name('cardapio.digital');




//fazendo só logar se for autenticado
Route::middleware('auth')->group(function () {
    
    Route::middleware('block.fk2')->group(function(){
        Route::get('painel-admin',function(){
            return view('adm.dashboard');
        })->name('painel-admin');

        Route::get('/adm-cadastrarMesas',function(){
            return view('adm.cadastrarMesas');
        })->name('adm.cadastarMesas');

        Route::get('/adm-cadastrarMesasModal',function(){
            return view ('adm.cadastrarMesasModal');
        })->name('adm.cadastrarMesasModal');

    });

    Route::middleware('block.pk1')->group(function(){
        Route::get('/painel-funcionarios',function(){
            return view('funcionarios.painelFuncionario');
        })->name('funcionario.painel');
    });
   


    Route::get('/logout',function(){
        Auth::logout();
        return redirect()->route('login');
    })->name('logout');




});



