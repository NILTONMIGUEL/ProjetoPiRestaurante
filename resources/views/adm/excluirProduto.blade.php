@extends('layouts.excluirProduto')
@section('title','-adm-excluirProduto')
@section('content')
    @livewire('excluir-produto',compact('id'))
@endsection