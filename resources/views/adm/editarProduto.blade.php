@extends('layouts.editarProduto')
@section('title','-adm-editarProdutos')
@section('content')
    @livewire('editar-produto',[
        'id' => $id,
    ])
@endsection