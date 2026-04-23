<?php
require_once '../admin/class/Registro.php';
$registro = new Registro();   
?>
<!DOCTYPE HTML>
<html>
<head>
	<title>Registro | CECYBOT 2026</title>
	  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta property="og:title" content="Torneo de Robótica y Simposio | CECYTEG Plantel Comonfort" />
    <meta property="og:description" content="REGISTRO CECYBOT 2026, ¿Estás listo para el reto?" />
    <meta property="og:image" content="https://cecybot2026.com/admin/assets/img/logo.png" />
    <meta property="og:url" content="https://cecybot2026.com/" />
    <meta property="og:type" content="website" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="REGISTRO Torneo de Robótica y Simposio CECYTEG Plantel Comonfort" />
    <meta name="twitter:description" content="REGISTRO CECYBOT 2026, ¿Estás listo para el reto?" />
    <meta name="twitter:image" content="https://cecybot2026.com/admin/assets/img/logo.png" />
    <link rel="icon" href="../admin/assets/img/favicon.ico" type="image/x-icon">
    
   <!-- Theme style -->
   <link rel="stylesheet" href="../admin/assets/css/adminlte.css">
   
<!-- jQuery -->
<script src="../admin/assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../admin/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<style>
    /* Estilo del overlay del loader */
    #loader {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(255, 255, 255, 0.8);
      display: flex;
      justify-content: center;
      align-items: center;
      z-index: 9999;
      visibility: hidden;
    }

    #loader img {
      width: 80px;
    }

    table {
            width: 50%;
            border-collapse: collapse;
        }
        @media screen and (max-width: 768px) {
            table {
                width: 100%;
            }
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        .oculto {
    display: none;
}
  </style>

</head>

<body style="background-color:  #2439e6;">

<?php
$status = $_GET['status'] ?? '';
?>

<script>
document.addEventListener("DOMContentLoaded", function() {
    let status = "<?php echo $status; ?>";

    if (status === "ok") {
        Swal.fire({
            icon: 'success',
            title: 'Registro exitoso',
            text: 'El equipo fue registrado correctamente',
            timer: 2000,
            showConfirmButton: false
        });
    }

    if (status === "error") {
        Swal.fire({
            icon: 'error',
            title: 'Error',
            text: 'Ocurrió un problema',
        });
    }
});
</script>

<div class="container-fluid">
        <div class="row">
          <div class="col" >

          <div  style="width:90%; margin-left:5%; background-color: white; padding:20px; border-radius:10px;">

          <img src="../admin/assets/img/banner1.jpg" style="width: 100%;" alt="CECYBOT 2025">

          <h2 class="text-center">REGISTRO DE EQUIPOS</h2> <br>

         
          
            <form action="../registro/lib/verificar_registro.php" method="post" id="formQR">

            
           
            <div class="form-group">
            <label for="titulo">Escanea el código QR <span class="text text-danger">*</span></label>
            <input  class="form-control" type="text" id="qrInput" name="qr" autofocus autocomplete="off">
            </div>

           
            </form>

         
<script>
const input = document.getElementById("qrInput");
const form = document.getElementById("formQR");

//Mantener foco siempre
window.addEventListener("load", () => input.focus());
document.addEventListener("click", () => setTimeout(() => input.focus(), 50));
window.addEventListener("focus", () => input.focus());

//Envío automático
input.addEventListener("input", function() {
    if (input.value.length > 0) {
        setTimeout(() => {
            procesarYEnviar();
        }, 100);
    }
});

function procesarYEnviar() {
    let valor = input.value.trim();

    try {
        //Si es URL válida
        let url = new URL(valor);
        let id = url.searchParams.get("id");

        if (id) {
            input.value = id; // solo deja el número
        }
    } catch (e) {
        //Si no es URL, intenta extraer número directo
        let match = valor.match(/\d+/);
        if (match) {
            input.value = match[0];
        }
    }

    input.blur();
    form.submit();
}
</script> 

         

          </div>
          </div>
          <!-- /.col -->
        </div>
        </div>
</body>

</html>