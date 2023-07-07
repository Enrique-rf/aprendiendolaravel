@extends('layout')
@section('content')

    <h1 style="margin-top:50px;" >Usuarios nuevos</h1>
    
    @if($newUser)
        <li>El nuevo usuario es {{ $newUser }}</li>
    @else
        <li>No hay ususarios nuevos..</li>
    @endif

@endsection

@section('sidebar')
@parent
@endsection

    
