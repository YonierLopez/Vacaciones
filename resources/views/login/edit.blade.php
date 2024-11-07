<!-- resources/views/users/edit.blade.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuario</title>
</head>
<body>
    <h1>Editar Usuario</h1>
    <form action="{{ route('users.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="first_name">Nombre</label>
        <input type="text" name="first_name" id="first_name" value="{{ $user->first_name }}" required>

        <label for="last_name">Apellido</label>
        <input type="text" name="last_name" id="last_name" value="{{ $user->last_name }}" required>

        <label for="email">Correo Electrónico</label>
        <input type="email" name="email" id="email" value="{{ $user->email }}" required>

        <label for="password">Contraseña</label>
        <input type="password" name="password" id="password">

        <button type="submit">Actualizar Usuario</button>
    </form>
    <a href="{{ route('users.index') }}">Volver al listado</a>
</body>
</html>
