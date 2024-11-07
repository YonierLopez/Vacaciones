<!-- resources/views/users/show.blade.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del Usuario</title>
</head>
<body>
    <h1>Detalles del Usuario</h1>
    <p><strong>Nombre:</strong> {{ $user->first_name }} {{ $user->last_name }}</p>
    <p><strong>Correo:</strong> {{ $user->email }}</p>
    <a href="{{ route('users.index') }}">Volver al listado</a>
</body>
</html>
