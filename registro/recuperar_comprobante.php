<?php
require_once('../admin/class/Registro.php');
$email = (isset($_REQUEST['email'])) ? $_REQUEST['email'] : null;
 $comprobantes = Registro::recuperarComprobantes($email);
 $num_comprobantes = count($comprobantes);
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta property="og:title" content="Primer Torneo de Robótica y Simposio" />
    <meta property="og:description" content="CECYBOT 2025 | Unidad Académica Comonfort" />
    <meta property="og:image" content="https://cecybot2026.com/admin/assets/img/logo.png" />
    <meta property="og:url" content="https://cecybot2026.com/" />
    <meta property="og:type" content="website" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Segundo Torneo de Robótica y Simposio" />
    <meta name="twitter:description" content="CECYBOT 2025 | Unidad Académica Comonfort" />
    <meta name="twitter:image" content="https://cecybot2026.com/admin/assets/img/logo.png" />
    <title>CECYBOT 2026</title>
    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <style>
      /* Estilo del fondo general */
      body {
        background-color: #005B97;
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
        background-color: #005B97 !important;
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
        background-color: #005B97;
      }
      .card:nth-child(2) {
        background-color: #005B97;
        
      }
      .card:nth-child(3) {
        background-color: #005B97;
        
      }
      .card:nth-child(4) {
        background-color: #005B97;
        
      }

      a {
        text-decoration: none !important;
        color: white;
      }

     
      .content{
        margin-top: 30px;
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
   
      <div class="container" style="max-width: 90%;">
        <!-- Header -->
        <header class="bg-light py-3 text-center">
        <img src="../admin/assets/img/banner1.jpg" style="width: 100%;" alt="CECYBOT 2025">
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
                  <a class="nav-link" href="../index.php" target="_blank">INICIO</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>

        <div class="content">
            

    
     

        <?php

            if($num_comprobantes > 1){
        echo "Se encontraron ". $num_comprobantes . " comprobantes de registro con el email ". $email;
        }else{
            echo "Se encontró ". $num_comprobantes . " comprobante de registro con el email ". $email;
        }
        echo "<br>";
         ?>

         <div class="container mt-4">
  <div class="row g-3">

  <?php
      foreach ($comprobantes as $item): 
?>

 <div class="col-12 col-sm-6 col-md-4 col-lg-3">

        <div class="card h-100 shadow-sm">
          <div class="card-body text-center">

            <h6 class="card-title mb-2">
              <?= htmlspecialchars($item['nombre_equipo']) ?>
            </h6>

            <img src="../admin/assets/img/bases.png" alt="Comprobante de Pago" width="120" height="120"> 

            <a href="search.php?id=<?php echo $item[0]; ?>" class="btn btn-primary">Descargar comprobante</a>

          </div>
        </div>

      </div>
 
 <?php endforeach; ?>

          </div>
</div>


       
        <!-- Footer -->
        <footer class="bg-dark text-white text-center py-3 mt-4">
          <p>&copy; 2026 Primer Torneo de Robótica y Simposio. CECYBOT 2026</p>
          <p> CECYTEG Unidad Académica Comonfort. Todos los derechos reservados.</p>
        </footer>
      
    </div>
  </body>
</html>