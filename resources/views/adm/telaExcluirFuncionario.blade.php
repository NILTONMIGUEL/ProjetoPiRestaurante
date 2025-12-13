@extends('layouts.telaExcluirFuncionario')
@section('title','-ExcluirFuncionario')
@section('content')
    @livewire('tela-excluir-funcionario',[
        'id' => $id,
    ])
@endsection