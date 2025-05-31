<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/png" sizes="32x32" href="./images/logo-netflix.png">
  <link rel="stylesheet" href="../netflix_proyecto/static/css/styles.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper-bundle.min.css" />


  <title>Proyecto Netflix</title>
</head>
<body>
  <script src="https://cdn.jsdelivr.net/npm/swiper-bundle.min.css"></script>
<script src="script.js"></script>


  <header class="header">
    <img src="images/logo-netflix.png" height="30" alt="Logo Netflix">
    <nav>
      <ul class="navigation">
        <li class="navigation-item"><a href="#">Series</a></li>
        <li class="navigation-item"><a href="#">Películas</a></li>
        <li class="navigation-item"><a href="#">Mi lista</a></li>
      </ul>
    </nav>
  </header>


  <div class="featured">
    <video muted loop autoplay height="500" src="images/videoalicia.mp4"></video>
    <div class="featured-details">
      <ul class="tags">
        <li class="tag">
          Johnny Depp
        </li>
        <li class="tag">
          Mia Wasikowska
        </li>
        <li class="tag">
          Anne Hathaway
        </li>
        <li class="tag">
          Helena Bonham Carter
        </li>
      </ul>

      <div class="descripcion">
        <ul class="descripcion">
        <li class="descripcion">
          Alicia, ahora una joven de 19 años de edad, regresa al País de las Maravillas para encontrar su verdadero destino y terminar con el gobierno de terror de la malvada reina Roja.
        </li>
        </ul>
      </div>
      <div class="featured-actions">
        <button class="button-secondary icon-plus">Mi lista</button>
        <button class="button icon-play">Reproducir</button>
        <button class="button-secondary icon-info">Info</button>

      </div>
      
    </div>
  </div>


  <main>
    <div class="list">
      <h2 class="list-title">Lo mejor de Alicia en el país de las maravillas</h2>
      <div class="list-content">
        <div class="list-item">
          <a href="#">
            <img src="./images/covers/alicia1.jpeg" width="192" height="288" alt="Alicia en el país de las maravillas">
          </a>
        </div>
        <div class="list-item">
          <a href="#">
            <img src="./images/covers/alicia2.jpeg" width="192" height="288" alt="Alicia en el país de las maravillas">
          </a>
        </div>
        <div class="list-item">
          <a href="#">
            <img src="./images/covers/alicia3.jpeg" width="192" height="288" alt="Alicia en el país de las maravillas">
          </a>
        </div>
        <div class="list-item">
          <a href="#">
            <img src="./images/covers/alicia4.jpeg" width="192" height="288" alt="Alicia en el país de las maravillas">
          </a>
        </div>
        <div class="list-item">
          <a href="#">
            <img src="./images/covers/alicia5.jpeg" width="192" height="288" alt="Alicia en el país de las maravillas">
          </a>
        </div>
        <div class="list-item">
          <a href="#">
            <img src="./images/covers/alicia6.jpg" width="192" height="288" alt="Alicia en el país de las maravillas">
          </a>
        </div>
      </div>
    </div>
    <div class="list">
      <h2 class="list-title">¡Navidad esta aqui!</h2>
      <div class="list-content">
        <div class="list-item">
          <a href="#">
            <img src="./images/covers/navidad1.jpeg" width="192" height="288" alt="Navidad de locos">
          </a>
        </div>
        <div class="list-item">
          <a href="#">
            <img src="./images/covers/navidad2.jpeg" width="192" height="288" alt="Four Christmases">
          </a>
        </div>
        <div class="list-item">
          <a href="#">
            <img src="./images/covers/navidad3.jpeg" width="192" height="288" alt="Un vecino con pocas luces">
          </a>
        </div>
        <div class="list-item">
          <a href="#">
            <img src="./images/covers/navidad4.jpeg" width="192" height="288" alt="Fred Claus">
          </a>
        </div>
        <div class="list-item">
          <a href="#">
            <img src="./images/covers/navidad5.jpeg" width="192" height="288" alt="Mi pobre angelito">
          </a>
        </div>
        <div class="list-item">
          <a href="#">
            <img src="./images/covers/navidad6.jpeg" width="192" height="288" alt="Dear Santa">
          </a>
        </div>
      </div>
    </div>
    <div class="list">
      <h2 class="list-title">¡Amor hecho peliculas!</h2>
      <div class="list-content">
        <div class="list-item">
          <a href="#">
            <img src="./images/covers/roman1.jpeg" width="192" height="288" alt="Bob Esponja la película">
          </a>
        </div>
        <div class="list-item">
          <a href="#">
            <img src="./images/covers/roman2.jpeg" width="192" height="288" alt="Bob Esponja la película">
          </a>
        </div>
        <div class="list-item">
          <a href="#">
            <img src="./images/covers/roman3.jpeg" width="192" height="288" alt="Bob Esponja la película">
          </a>
        </div>
        <div class="list-item">
          <a href="#">
            <img src="./images/covers/roman4.jpeg" width="192" height="288" alt="Bob Esponja la película">
          </a>
        </div>
        <div class="list-item">
          <a href="#">
            <img src="./images/covers/roman5.jpeg" width="192" height="288" alt="Bob Esponja la película">
          </a>
        </div>

        <div class="list-item">
          <a href="#">
            <img src="./images/covers/roman6.jpeg" width="192" height="288" alt="Bob Esponja la película">
          </a>
        </div>
      </div>
    </div>
  </main>

  <footer class="footer">
    <ul class="tab-list">
      <li class="tab-item">
        <a href="#">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
              d="M12 2.09961L1 12H4V21H11V15H13V21H20V12H23L12 2.09961ZM12 4.79102L18 10.1914V11V19H15V13H9V19H6V10.1914L12 4.79102Z" />
          </svg>
          <span>Inicio</span>
        </a>
      </li>
      <li class="tab-item">
        <a href="#">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g clip-path="url(#clip0)">
              <path
                d="M4 3C2.897 3 2 3.897 2 5V19C2 20.103 2.897 21 4 21H12V19H4V5H20V13.2852L22 14.4082V5C22 3.897 21.103 3 20 3H4ZM6.00195 7V9H8V7H6.00195ZM16 7V9H18V7H16ZM6 11V13H8V11H6ZM15.0859 13C14.514 13.019 14 13.492 14 14.1445V22.8555C14 23.7255 14.9132 24.2764 15.6602 23.8574L23.4199 19.502C24.1939 19.067 24.1939 17.932 23.4199 17.498L15.6602 13.1426C15.4734 13.0378 15.2766 12.9937 15.0859 13ZM6 15V17H8V15H6Z"
                fill="black" />
            </g>
            <defs>
              <clipPath id="clip0">
                <rect width="24" height="24" fill="white" />
              </clipPath>
            </defs>
          </svg>
          <span>Próximamente</span>
        </a>
      </li>
      <li class="tab-item">
        <a href="#">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
              d="M9 2C5.14585 2 2 5.14585 2 9C2 12.8541 5.14585 16 9 16C10.748 16 12.345 15.348 13.5742 14.2812L14 14.707V16L20 22L22 20L16 14H14.707L14.2812 13.5742C15.348 12.345 16 10.748 16 9C16 5.14585 12.8541 2 9 2ZM9 4C11.7733 4 14 6.22673 14 9C14 11.7733 11.7733 14 9 14C6.22673 14 4 11.7733 4 9C4 6.22673 6.22673 4 9 4Z"
              fill="black" />
          </svg>
          <span>Buscar</span>
        </a>
      </li>
      <li class="tab-item">
        <a href="#">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M11 2C10.448 2 10 2.448 10 3V11H6L12 17L18 11H14V3C14 2.448 13.552 2 13 2H11ZM2 20V22H22V20H2Z"
              fill="black" />
          </svg>
          <span>Descargas</span>
        </a>
      </li>
    </ul>
  </footer>
</body>
</html>