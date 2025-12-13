<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\admEditarMesas;
use App\Http\Controllers\FuncionariosController;



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


//PRODUTOS
Route::get('/admin-produtos',function(){
    return view('adm.visualizarProdutos');
})->name('admin-produtos');

Route::get('/admin-cadastrarProdutos',function(){
    return view('adm.cadastrarProdutos');
})->name('admin-cadastrarProdutos');















//fazendo só logar se for autenticado
Route::middleware('auth')->group(function () {
    
    Route::middleware('block.fk2')->group(function(){
        Route::get('painel-admin',function(){
            return view('adm.dashboard');
        })->name('painel-admin');

        Route::get('/adm-cadastrarMesas',function(){
            return view('adm.cadastrarMesas');
        })->name('adm.cadastrarMesas');

        Route::get('/adm-cadastrarMesasModal',function(){
            return view ('adm.cadastrarMesasModal');
        })->name('adm.cadastrarMesasModal');

        //criando a rota de alterar produtos
        Route::get('/admin-editarMesas/{id}',[admEditarMesas::class, 'index'])->name('admin-editarMesas');

        //criando a rota para excluir o item do banco de dados
        Route::get('/admin-excluirMesas/{id}',[admEditarMesas::class , 'excluir'])->name('admin-excluirMesas');

        //criando a rota de cancelar a alteração
        Route::get('/admin-cancelarExclusao',[admEditarMesas::class , 'cadastrarMesas'])->name('admin-cadastrarMesas');

        //criando a rota de funcionarios
        Route::get('/admin-funcionarios',function(){
            return view('adm.Funcionarios');
        })->name('admin-funcionarios');

        //criando a rota de cadastrar funcionarios
        Route::get('admin-cadastrarFuncionarios',function(){
            return view('adm.telaCadastrarFuncionario');
        })->name('admin-cadastrarFuncionarios');

        //criando a rota de editar funcionario
        Route::get('/admin-editarFuncionario/{id?}',[FuncionariosController::class, 'editarFuncionario'])->name('admin-editarFuncionario');

        //criando a rota de excluir funcionario
        Route::get('/admin-excluirFuncionario/{id}',[FuncionariosController::class, 'excluirFuncionario'])->name('admin-excluirFuncionario');



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



