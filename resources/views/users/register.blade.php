<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuario</title>
</head>
<body>
    <h1>Formulario de Registro</h1>

<form action="{{ route('register.store') }}" method="POST">
    @csrf
    <label for="name">Nombre:</label>
    <input type="text" name="name" id="name" required>
    <br>

    <label for="email">Correo Electrónico:</label>
    <input type="email" name="email" id="email" required>
    <br>

    <label for="password">Contraseña:</label>
    <input type="password" name="password" id="password" required>
    <br>

    <label for="password_confirmation">Confirmar Contraseña:</label>
    <input type="password" name="password_confirmation" id="password_confirmation" required>
    <br>

    <button type="submit">Registrar</button>
</form>

</body>
</html>
