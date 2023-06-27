<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>create</title>
</head>
<body>
    <h1>Usuarios nuevos</h1>
    
    @if($newUser)
        <li>El nuevo usuario es {{ $newUser }}</li>
    @else
        <li>No hay usuario.</li>
    @endif
    
</body>
</html>
            