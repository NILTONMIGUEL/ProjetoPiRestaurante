@extends('layouts.editarMesas')
@section('title','-editar mesas')
@section('content')

    @livewire('editar-mesas',[
        'idMesa' => $id,
    ])

@endsection