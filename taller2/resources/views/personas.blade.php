<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Personas</title>
</head>
<body>
    <h2>Lista de Personas</h2>
    <ul>
        @foreach($personas as $persona)
            <li>{{ $persona->nombre }} - {{ $persona->edad }} años - Rol: {{ $persona->rol }}</li>
        @endforeach
    </ul>
</body>
</html>