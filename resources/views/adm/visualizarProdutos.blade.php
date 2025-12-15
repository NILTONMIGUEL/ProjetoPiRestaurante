@extends('layouts.dashboard')
@section('title','-visualizarProdutos')
@section('content')
    <div class="page-content">

        <div class="content-header">
            <h2 style="color: var(--color-primary);">Produtos Cadastrados</h2>

            <a href="{{route('admin-cadastrarProdutos')}}" class="btn-cadastrar" style="text-decoration: none">
                <i class="fas fa-plus-circle"></i> Cadastrar Produto
            </a>
        </div>
        <h2 style="color: white; margin:60px 0;">Entrada</h2>
        @livewire('visualizar-produtos')
        <h2 style="color: white; margin:60px 0;">Prato Principal</h2>
        @livewire('pratos-principal')
        <h2 style="color: white; margin:60px 0;">Sobremesas</h2>
        @livewire('sobremesas')
        <h2 style="color: white; margin:60px 0;">Bebidas</h2>
        @livewire('bebidas')
    </div>
@endsection
