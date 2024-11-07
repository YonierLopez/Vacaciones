<!-- resources/views/users/create.blade.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Usuario</title>
</head>
<body>
    <h1>Crear Usuario</h1>
    <form action="{{ route('users.store') }}" method="POST">
        @csrf
        <label for="first_name">Nombre</label>
        <input type="text" name="first_name" id="first_name" required>

        <label for="last_name">Apellido</label>
        <input type="text" name="last_name" id="last_name" required>

        <label for="email">Correo Electrónico</label>
        <input type="email" name="email" id="email" required>

        <label for="password">Contraseña</label>
        <input type="password" name="password" id="password" required>

        <button type="submit">Guardar Usuario</button>
    </form>
    <a href="{{ route('users.index') }}">Volver al listado</a>
</body>
</html>
