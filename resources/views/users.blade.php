<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de usuarios - Styde.net</title>
</head>
<body>

    <h1> {{$title}} </h1>

    <hr>

        <ul>
            @forelse($users as $user)
                <li>{{$user}}</li>
            @empty
                <li>No hay usuarios registrados..</li>
            @endforelse
        </ul>
 


 
    
</body>
</html>



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

