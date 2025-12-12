@extends('layouts.editarFuncionario')
@section('title','- editarFuncionario')
@section('content')

    @livewire('tela-editar-funcionario',[
        'id' => $id,
    ])

@endsection