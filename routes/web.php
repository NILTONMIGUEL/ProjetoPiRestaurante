<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('about');
})->name('/');



Route::get('loginCliente',function(){
    return view('clientes.loginCliente');
})->name('loginCliente');


Route::get('cadastrarCliente',function(){
    return view('clientes.cadastrarCliente');
})->name('cadastrarCliente');
