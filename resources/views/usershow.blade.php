


@extends('layout')

@section('content')
	<h1 style="margin-top: 50px;" > usuario #{{$id}} </h1>
        Mostrando detalle del usuario: {{$id}}
@endsection
@section('sidebar')
 {{-- @parent 'Sirve para mantener el texto que esta en mi layout' --}}   
    <h1>Barra lateral personalizada</h1>
@endsection
        