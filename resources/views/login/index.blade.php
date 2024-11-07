<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Exótico</title>
    <style>
        /* El código CSS que has proporcionado va aquí */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background: url('https://images.pexels.com/photos/20866888/pexels-photo-20866888/free-photo-of-ciudad-punto-de-referencia-edificio-pared.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1') no-repeat center center fixed;
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            font-family: 'Arial', sans-serif;
            color: white;
            filter: brightness(0.7);
        }

        .login-container {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .login-box {
            background: rgba(0, 0, 0, 0.6);
            padding: 40px 50px;
            border-radius: 15px;
            text-align: center;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
            transform: scale(1);
            transition: transform 0.3s ease-in-out;
        }

        .login-box:hover {
            transform: scale(1.05);
        }

        h2 {
            margin-bottom: 30px;
            font-size: 30px;
            letter-spacing: 2px;
            text-transform: uppercase;
            font-weight: bold;
        }

        .textbox {
            position: relative;
            margin-bottom: 30px;
            padding: 12px;
            width: 100%;
            border-radius: 5px;
            background-color: #f5f5f5;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.15);
            transition: transform 0.3s ease-in-out;
        }

        .textbox:hover {
            transform: translateY(-5px);
        }

        .textbox .icon {
            position: absolute;
            top: 50%;
            left: 15px;
            transform: translateY(-50%);
            font-size: 18px;
            color: #333;
        }

        .textbox input {
            width: 100%;
            padding: 12px;
            padding-left: 40px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            background: transparent;
            color: #333;
            outline: none;
            box-shadow: none;
        }

        .btn {
            width: 100%;
            padding: 15px;
            background: #ff0044;
            border: none;
            border-radius: 5px;
            color: white;
            font-size: 18px;
            text-transform: uppercase;
            cursor: pointer;
            transition: background 0.3s ease;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
        }

        .btn:hover {
            background: #7a00b1;
        }

        .register-text {
            margin-top: 20px;
            font-size: 16px;
            color: #aaa;
        }

        .register-text a {
            color: #ff0044;
            text-decoration: none;
            font-weight: bold;
        }

        body, .login-box {
            animation: light 2s ease-in-out infinite alternate;
        }

        @keyframes light {
            0% {
                box-shadow: 0 0 10px #ff0044, 0 0 30px #feb47b;
            }
            100% {
                box-shadow: 0 0 15px #ff0044, 0 0 40px #feb47b;
            }
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="login-box">
            <h2>Iniciar Sesión</h2>
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="textbox">
                    <input type="email" name="email" placeholder="Correo Electrónico" required>
                    <span class="icon">📧</span>
                </div>
                <div class="textbox">
                    <input type="password" name="password" placeholder="Contraseña" required>
                    <span class="icon">🔒</span>
                </div>
                <button type="submit" class="btn">Entrar</button>
            </form>
            <p class="register-text">¿No tienes cuenta? <a href="{{ route('register.form') }}">Regístrate</a></p>
        </div>
    </div>

    <form action="{{ route('logout') }}" method="POST">
    @csrf
    <button type="submit" class="btn">Cerrar sesión</button>
</form>

</body>
</html>
