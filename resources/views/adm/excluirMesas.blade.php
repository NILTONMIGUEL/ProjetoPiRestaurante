@extends('layouts.alertExcluir')
@section('title','-excluirMesas')
@section('content')
    @livewire('excluir-mesas',[
        'id' => $id,
        'mesa' => $mesa,
    ])
@endsection