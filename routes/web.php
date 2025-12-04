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


//fazendo só logar se for autenticado
Route::middleware('auth')->group(function () {
    
    Route::get('painel-admin',function(){
        return view('adm.dashboard');
    })->name('painel-admin');

    Route::get('/logout',function(){
        Auth::logout();
        return redirect()->route('admin');
    })->name('logout');



});



