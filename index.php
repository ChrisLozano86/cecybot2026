<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta property="og:title" content="Torneo de Robótica y Simposio | CECYTEG Plantel Comonfort" />
    <meta property="og:description" content="CECYBOT 2026 | CECYTEG Plantel Comonfort" />
    <meta property="og:image" content="https://cecybot2026.com/admin/assets/img/logo.png" />
    <meta property="og:url" content="https://cecybot2026.com/" />
    <meta property="og:type" content="website" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Torneo de Robótica y Simposio CECYTEG Plantel Comonfort" />
    <meta name="twitter:description" content="CECYBOT 2026 | CECYTEG Plantel Comonfort" />
    <meta name="twitter:image" content="https://cecybot2026.com/admin/assets/img/logo.png" />
    <title>CECYBOT 2026</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="admin/assets/css/social_bar.css">
    
    <style>
      /* Estilo del fondo general */
      body {
        background-color: #2439e6;
      }

      /* Estilo del container */
      .container {
        background-color: rgba(255, 255, 255, 0.9); /* Fondo blanco con opacidad */
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      }

      /* Estilo de la barra de navegación */
      .navbar {
        background-color: #2439e6 !important;
      }

      .navbar .nav-link, .navbar-toggler-icon {
        color: white !important;
      }

      /* Animaciones para las tarjetas */
      .card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        color: white;
        margin-bottom: 20px;
      }

      .card:hover {
        transform: scale(1.1) translateY(-5px);
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
      }

      /* Colores de ejemplo para tarjetas */
      .card:nth-child(1) {
        background-color: #2439e6;
      }
      .card:nth-child(2) {
        background-color: #2439e6;
        
      }
      .card:nth-child(3) {
        background-color: #2439e6;
        
      }
      .card:nth-child(4) {
        background-color: #2439e6;
        
      }

      a {
        text-decoration: none !important;
        color: white;
      }

      .hero-section {
        text-align: center;
        padding: 50px 0;
      }
      .hero-section img {
        max-width: 100%;
        height: auto;
      }
      
      @media (min-width: 768px) {
        .hero-section {
          display: flex;
          flex-direction: column;
          align-items: center;
          justify-content: center;
        }
      }


    </style>
  </head>
  
  <body>
    <!-- Modal -->
    <div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="imageModalLabel">¿Estás listo para reto? </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <img src="admin/assets/img/cartel_cecybot.jpg" class="img-fluid" alt="Cartel CECYBOT 2025">
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modalRecuperar" tabindex="-1" aria-labelledby="modalRecuperarLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      
      <div class="modal-header">
        <h5 class="modal-title" id="modalRecuperarLabel">Recuperar comprobante</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
      </div>
      
      <form action="registro/recuperar_comprobante.php" method="POST">
        <div class="modal-body">
          
          <div class="mb-3">
            <label for="email" class="form-label">Correo electrónico</label>
            <input 
              type="email" 
              class="form-control" 
              id="email" 
              name="email" 
              placeholder="ejemplo@correo.com"
              required>
          </div>

        </div>
        
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-warning">Recuperar</button>
        </div>
      </form>

    </div>
  </div>
</div>


<div class="cecybot-sidepanel">

    <a href="https://www.facebook.com/TU_PAGINA" target="_blank" class="panel-item facebook">
    <img src="https://cdn-icons-png.flaticon.com/512/733/733547.png">
    <span>Facebook</span>
</a>

    <a href="https://www.instagram.com/TU_USUARIO" target="_blank" class="panel-item">
        <img src="https://cdn-icons-png.flaticon.com/512/2111/2111463.png">
        <span>Instagram</span>
    </a>

    <a href="https://www.tiktok.com/@TU_USUARIO" target="_blank" class="panel-item">
        <img src="https://cdn-icons-png.flaticon.com/512/3046/3046121.png">
        <span>TikTok</span>
    </a>

</div>

      <div class="container" style="max-width: 90%;">
        <!-- Header -->
        <header class="bg-light py-3 text-center">
        <img src="admin/assets/img/banner1.jpg" style="width: 100%;" alt="CECYBOT 2025">
        </header>

        <!-- Navegación -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light mt-3">
          <div class="container-fluid">
            <button
              class="navbar-toggler"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#navbarNav"
              aria-controls="navbarNav"
              aria-expanded="false"
              aria-label="Toggle navigation"
              style="color: white;"
            >
              <span class="navbar-toggler-icon" style="color: white;"> </span>
              Menú
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
              <li class="nav-item">
                  <a class="btn btn-warning" href="registro/index.php" target="_blank">¡REGISTRA TU EQUIPO!</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#inicio">Bases de la Competencia</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#categorias">Categorías y Reglamentos</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#lugar">Lugar y Fecha del Evento</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#contacto">Contacto</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>

        <!-- Sección Inicio -->
        <section id="inicio" class="my-5">
          <h2>Bases de la competencia</h2>
          <p>El CECyTE Guanajuato Unidad Académica COMONFORT tiene la intención de crear y fomentar el interés en el amplio mundo de la robótica y la electrónica en todo el alumnado de nuestro plantel así como a los estudiantes de nuestro municipio y municipios aledaños, por lo que estamos invitándolos a participar el día <span class="fw-bold">05 de junio de 2026 </span> a la edición anual del Torneo de Robótica y Simposium (CECyBOT Comonfort 2026) </p>
          <div class="text-center">
  <a href="bases/Bases_CECyBOT_2026.pdf" target="_blank" class="btn btn-secondary btn-lg">
    <img src="admin/assets/img/bases.png" alt="CECYBOT 2026" width="80" height="80">
    DESCARGAR LAS BASES DEL EVENTO
  </a>
</div>       
        </section>

         <!-- Sección Hero -->
      <section class="hero-section">
        <h2>¿Estás listo para el reto?</h2>
        <img src="admin/assets/img/logo.png" alt="CECYBOT 2025" style="width: 20%;">
        <a href="registro/index.php" class="btn btn-primary btn-lg">REGISTRAR EQUIPO</a>
        <br>
     <a href="#" class="btn btn-warning btn-la" data-bs-toggle="modal" data-bs-target="#modalRecuperar">RECUPERAR COMPROBANTE DE REGISTRO</a>
      </section>


        <!-- Sección Categorías -->
        <section id="categorias" class="my-5">
          <h2>Categorías y Reglamentos</h2>
          <p>Consulta y descarga los reglamentos de cada categoría.</p>
        </section>

        <!-- Tarjetas en columnas -->
        <div class="row text-center my-4">
          <div class="col-12 col-md">
          <a href="https://drive.google.com/file/d/1QEXc7tQGrC-peanF4aSkV65wtIM1prSY/view" target="_blank" class="card-link">
            <div class="card">
            <h5 class="card-title" style="padding-top: 20px;">Mini Sumo RC Profesional</h5>
              <img src="admin/assets/img/mini_sumo.png" class="card-img-top" alt="Mini Sumo RC" style="width: 80%; margin-left: 10%;"></a>
              <div class="card-body">
                
                <p class="card-text">¡Fuerza, estrategia y velocidad! ¿Tu robot tiene lo necesario para dominar el ring?.</p>
              </div>
            </a>
            </div>
          </div>
          <div class="col-12 col-md">
          <a href="https://drive.google.com/file/d/17jHjUKhDH9pfBwyzb1BbjtGh-0DBAvrl/view" target="_blank" class="card-link">
            <div class="card">
            <h5 class="card-title" style="padding-top: 20px;">Robot Soccer Profesional</h5>
              <img src="admin/assets/img/robot_soccer_pro.png" class="card-img-top" alt="Robot Soccer" style="width: 80%; margin-left: 10%;">
              <div class="card-body">
                <p class="card-text"> ¡Acción y precisión en cada jugada! Diseña el mejor equipo y conquista la cancha.</p>
              </div>
            </div>
          </a>
          </div>

         <!--  <div class="col-12 col-md">
          <a href="https://drive.google.com/file/d/1UsbYQVB_HSbaiKTLMjuZKkNJ7JK8KVt0/view" target="_blank" class="card-link">
            <div class="card">
            <h5 class="card-title" style="padding-top: 20px;">Robot Soccer Amateur</h5>
              <img src="admin/assets/img/robot_soccer.png" class="card-img-top" alt="Robot Soccer" style="width: 80%; margin-left: 10%;">
              <div class="card-body">
                <p class="card-text"> ¡Acción y precisión en cada jugada! Diseña el mejor equipo y conquista la cancha.</p>
              </div>
            </div>
          </a>
          </div> -->
          <div class="col-12 col-md">
          <a href="https://drive.google.com/file/d/1EEoyfRuiB9q_XBv72y72KZC2qAO541Nq/view" target="_blank" class="card-link">
            <div class="card">
            <h5 class="card-title" style="padding-top: 20px;">Seguidor de Línea (Kit Educativo)</h5>
              <img src="admin/assets/img/seguidor_educativo.png" class="card-img-top" alt="Seguidor Línea Educativo" style="width: 70%; margin-left: 15%;">
              <div class="card-body">   
                <p class="card-text">¡Velocidad y precisión al límite! Solo los más rápidos y exactos llegarán a la meta.</p>
              </div>
            </div>
          </a>
          </div>
          <div class="col-12 col-md">
          <a href="https://drive.google.com/file/d/1I7c61QB3BxR--IVjRExXDu0MG0wPDhj9/view?usp=drive_link" target="_blank" class="card-link">
            <div class="card">
            <h5 class="card-title" style="padding-top: 20px;">Seguidor de Línea Amateur</h5>
              <img src="admin/assets/img/seguidor_pro.png" class="card-img-top" alt="Seguidor Linea Amateur" style="width: 80%; margin-left: 10%;">
              <div class="card-body">
                <p class="card-text">¡Velocidad, control y máxima precisión! Solo los mejores trazan el camino hacia la victoria.</p>
              </div>
            </div>
          </a>
          </div>
        </div>

        <!-- Google Maps y Dirección -->
        
        <div class="row my-4" id="lugar">
        <h2>Lugar del evento</h2>
          <div class="col-12 col-md-8">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3731.7470952180643!2d-100.75585082529375!3d20.72049199829621!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842ca9b299c9635d%3A0xb1ffb8f576e1ffc3!2sSalon%20Quinta%20Caporales!5e0!3m2!1ses-419!2smx!4v1741566480979!5m2!1ses-419!2smx"
              width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy"
            ></iframe>
          </div>
          <div class="col-12 col-md-4 text-center">
            <div style="margin-top: 20px;">
            <h4>Salón Quinta Caporales, Comonfort, Guanajuato.</h4>
            <hr>
            <br>
           <h5> Simposium y exihibición de robótica </h5>
            <h5>04 de junio de 2026 10:00 am</h5>
             <p class="fw-bold">Hora de inicio: 10:00am</p>

            <hr>
            <h5> ¡Torneo de Robótica! </h5>
            <h5>05 de junio de 2026</h5>
            <p class="fw-bold">Arranque del evento y registro: 8:00am</p>
            <hr>
            </div>
            <!-- <img src="admin/assets/img/location.png" style="width: 20%; height: auto;"> -->
          </div>
        </div>

       

        <!-- Sección de Contacto -->
        <section id="contacto" class="my-5">
          <h2>Contacto</h2>
          <p class="fw-bold">Para cualquier duda o comentarios por favor contactanos a cualquiera de los siguientes correos:</p>
          <p>christian.lozanoh@cecyteg.edu.mx</p>
          <p>jose.cervantesr@cecyteg.edu.mx</p>
        </section>

        <!-- Footer -->
        <footer class="bg-dark text-white text-center py-3 mt-4">
          <p>&copy; 2026 Torneo de Robótica y Simposio. CECYBOT 2026</p>
          <p> CECYTEG Unidad Académica Comonfort. Todos los derechos reservados.</p>
        </footer>
      
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var myModal = new bootstrap.Modal(document.getElementById('imageModal'));
            myModal.show();
        });
    </script>
  </body>
</html>
