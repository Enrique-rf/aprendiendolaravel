

@extends('layout')
@section('content')    
        <h1 style="margin-top:50px;" > {{$title}} </h1>

        <ul>
            @forelse($users as $user)
                <li>{{$user}}</li>
            @empty
                <li>No hay usuarios registrados..</li>
            @endforelse
        </ul>

@endsection
@section('sidebar')
    <h1>Barra lateral personalizada</h1>
@endsection


  {{--
   @empty($users) 
        <p>No hay usuarios registrados..</p>
   @else
        <ul>
            @foreach($users as $user)
                <li> {{$user}}</li>
            @endforeach
        </ul>
    @endif
    
    
     DIRECTIVAS DE BLADE
    @unless( empty($users))
        <ul>
            @foreach($users as $user)
                <li> {{$user}}</li>
            @endforeach
        </ul>
    @else
        <p>No hay usuarios registrados..</p>
    @endif
    

     DIRECTIVAS DE BLADE
    @if(! empty($users))
        <ul>
            @foreach($users as $user)
                <li> {{$user}}</li>
            @endforeach
        </ul>
    @else
        <p>No hay usuarios registrados..</p>
    @endif
    --}}

