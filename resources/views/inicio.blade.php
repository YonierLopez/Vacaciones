<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Despegar - Interfaz Clonada</title>
  <style>
    /* Reset básico */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: Arial, sans-serif;
      background-color: #f3f4f6;
      color: #333;
    }

    /* Animación de brillo */
    @keyframes shine {
      0% {
        opacity: 0.5;
      }
      50% {
        opacity: 1;
      }
      100% {
        opacity: 0.5;
      }
    }

    /* Encabezado */
    header {
      background-color: #5c3fb4;
      color: white;
      padding: 30px 30px 15px 30px; /* Añadí más espacio en la parte superior */
      display: flex;
      justify-content: center; /* Centra el contenido dentro del header */
      align-items: center;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
      flex-direction: column; /* Hace que los elementos dentro se apilen en columna */
    }

    .logo {
      position: absolute; /* Para mover el logo fuera del flujo normal */
      top: 30px; /* Baja un poco el logo para evitar la superposición */
      left: 30px; /* Mueve el logo a la izquierda */
    }

    .logo img {
        width: 120px; 
    }

    nav {
      display: flex;
      gap: 15px;
      justify-content: center; /* Centra los enlaces */
      margin-top: 10px; /* Espacio entre la logo y los enlaces */
    }

    nav a {
      color: white;
      text-decoration: none;
      font-weight: bold;
    }

    .contact-info {
      color: #ffb81c;
      margin-top: 10px; /* Espacio entre los enlaces y el número */
    }

    /* Barra de búsqueda de vuelos */
    .search-bar {
      background-color: #5c3fb4;
      padding: 30px;
      color: white;
      text-align: center;
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
      animation: shine 3s infinite;
    }

    .search-bar form {
      display: flex;
      gap: 10px;
      justify-content: center;
      align-items: center;
      flex-wrap: wrap;
    }

    .search-bar input, .search-bar select {
      padding: 10px;
      font-size: 16px;
      border-radius: 5px;
      border: none;
      width: 180px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .search-bar button {
      background-color: #ff5a5f;
      color: white;
      font-weight: bold;
      padding: 10px 20px;
      font-size: 16px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      transition: transform 0.3s ease;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
    }

    .search-bar button:hover {
      transform: scale(1.05);
    }

    /* Sección de destinos populares */
    .popular-destinations {
      padding: 20px;
      text-align: center;
    }

    .popular-destinations h2 {
      color: #333;
      margin-bottom: 20px;
      font-size: 24px;
    }

    .destinations-grid {
      display: flex;
      gap: 20px;
      flex-wrap: wrap;
      justify-content: center;
    }

    .destination {
      background-color: white;
      border-radius: 8px;
      overflow: hidden;
      width: 200px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
      text-align: center;
      position: relative;
      transition: transform 0.3s ease;
    }

    .destination:hover {
      transform: scale(1.05);
    }

    .destination img {
      width: 100%;
      height: 120px;
      object-fit: cover;
    }

    .destination p {
      padding: 10px;
      font-weight: bold;
      color: #5c3fb4;
    }

    /* Reflejo */
    .destination::after {
      content: "";
      position: absolute;
      bottom: -10px;
      left: 0;
      right: 0;
      height: 100%;
      background-image: inherit;
      transform: scaleY(-1);
      filter: blur(3px) opacity(0.3);
      background-size: cover;
    }

    .map {
      margin-top: 50px;
      margin-bottom: 50px;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
    }

    .map iframe {
      border-radius: 22px;
    }
  </style>
</head>
<body>

  <!-- Encabezado -->
  <header>
    <div class="logo">
      <img src="./logo-removebg-preview.png" alt="Vacaciones_Top Logo">
    </div>
    <nav>
      <a href="#">Inicio</a>
      <a href="#">Sobre Nosotros</a>
      <a href="#">Paquetes Turísticos</a>
      <a href="#">Contacto</a>
    </nav>
    <div class="contact-info">Para ventas 01 800 518 9327</div>
  </header>

  <!-- Barra de búsqueda de vuelos -->
  <div class="search-bar">
    <form>
      <select>
        <option>Ida y vuelta</option>
        <option>Solo ida</option>
        <option>Multidestino</option>
      </select>
      <input type="text" placeholder="Origen">
      <input type="text" placeholder="Destino">
      <input type="date" placeholder="Fecha de ida">
      <input type="date" placeholder="Fecha de vuelta">
      <select>
        <option>1 Persona, Económica</option>
        <option>2 Personas, Económica</option>
        <option>1 Persona, Ejecutiva</option>
      </select>
      <button>Buscar</button>
    </form>
  </div>

  <!-- Sección de destinos populares -->
  <div class="popular-destinations">
    <h2>Encuentra vuelos baratos a los destinos más populares</h2>
    <div class="destinations-grid">
      <div class="destination">
        <img loading="lazy" src="https://th.bing.com/th/id/R.4b0d777fc392d2352f3630933776499e?rik=S0zIgGWHojFmtQ&pid=ImgRaw&r=0" alt="Destino 1">
        <p>París</p>
      </div>
      <div class="destination">
        <img src="https://th.bing.com/th/id/R.36276d60b32d8204600d7eff8b00ff3b?rik=lq73FLfHBs5Ang&pid=ImgRaw&r=0" alt="Destino 2">
        <p>Roma</p>
      </div>
      <div class="destination">
        <img loading="lazy" src="https://th.bing.com/th/id/R.26ff2ffe06f0fca15d9585b0adf08a20?rik=2CW%2btXPIZRDtMg&riu=http%3a%2f%2ftokyofashion.com%2fwp-content%2fuploads%2f2011%2f10%2fKaela-Kimura-Shibuya-109-2011-10-11-G4603.jpg&ehk=t8%2bJaXRQvdYJPC8ognZC%2bNuGnwe7Jel%2fN1Q%2biPoz9DU%3d&risl=&pid=ImgRaw&r=0" alt="Destino 3">
        <p>Tokio</p>
      </div>
      <div class="destination">
        <img loading="lazy" src="https://th.bing.com/th/id/R.20b453ad098e1aaf12abeaaec5586abb?rik=5bQiok%2bz4Thezg&pid=ImgRaw&r=0" alt="Destino 4">
        <p>Miami</p>
      </div>
    </div>
  </div>

  <div class="map">
      <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d43061.88129198551!2d-76.62837300121674!3d2.447701967123609!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sHoteles!5e0!3m2!1ses-419!2sco!4v1731424726129!5m2!1ses-419!2sco" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>

</body>
</html>
