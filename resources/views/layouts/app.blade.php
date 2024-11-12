<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Página de Turismo</title>

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    
    <style>
        /* Estilos generales */
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            height: 100vh;
        }

        /* Estilos para la barra de navegación */
        nav {
            background-color: #333;
            color: white;
            width: 100%;
            position: fixed;
            top: 0;
            z-index: 10;
            display: flex;
            justify-content: space-between;
            padding: 10px 20px;
            box-sizing: border-box;
        }

        nav .logo {
            color: white;
            font-size: 24px;
            font-weight: bold;
            text-transform: uppercase;
        }

        nav ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: space-around;
            width: 100%;
        }

        nav ul li {
            padding: 15px;
        }

        nav ul li a {
            color: white;
            text-decoration: none;
            font-size: 16px;
        }

        nav ul li a:hover {
            text-decoration: underline;
        }

        /* Estilos para el icono hamburguesa */
        .hamburger {
            display: none;
            flex-direction: column;
            cursor: pointer;
            padding: 10px;
        }

        .hamburger div {
            width: 30px;
            height: 4px;
            background-color: white;
            margin: 5px 0;
        }

        /* Estilos de la barra de navegación para móviles */
        @media (max-width: 768px) {
            nav ul {
                display: none;
                width: 100%;
                flex-direction: column;
                background-color: #333;
                position: absolute;
                top: 60px;
                left: 0;
                padding: 0;
                box-sizing: border-box;
            }

            nav ul.active {
                display: flex;
            }

            nav ul li {
                text-align: center;
                width: 100%;
            }

            .hamburger {
                display: flex;
            }
        }

        /* Estilo para el contenido principal */
        .content {
            flex: 1;
            padding-top: 60px; /* Para dar espacio al navbar */
            padding: 20px;
            overflow-y: auto;
        }

        footer {
            text-align: center;
            background-color: #333;
            color: white;
            padding: 10px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>

    <!-- Barra de Navegación -->
    <nav>
        <div class="logo">
            Mi Página de Turismo
        </div>

        <!-- Icono de Hamburguesa (solo para móviles) -->
        <div class="hamburger" id="hamburger-icon">
            <div></div>
            <div></div>
            <div></div>
        </div>

        <!-- Menú de Navegación -->
        <ul id="menu">
            <li><a href="/">Inicio</a></li>
            <li><a href="/sobre-nosotros">Sobre Nosotros</a></li>
            <li><a href="/planes-turisticos">Planes Turísticos</a></li>
            <li><a href="/contacto">Contacto</a></li>
        </ul>
    </nav>

    <!-- Contenido Principal -->
    <div class="content">
        @yield('content')
    </div>

    <footer>
        <p>&copy; 2024 Mi Página de Turismo. Todos los derechos reservados.</p>
    </footer>

    <!-- Script para abrir/cerrar el menú en móviles -->
    <script>
        const hamburger = document.getElementById('hamburger-icon');
        const menu = document.getElementById('menu');

        hamburger.addEventListener('click', () => {
            menu.classList.toggle('active');
        });
    </script>

</body>
</html>
          