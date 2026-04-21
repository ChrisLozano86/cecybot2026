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

<script>

function registrarUnidadAcademica(){

let valor = document.getElementById('institucionSeleccionada').value; //obtenemos el valor del select

console.log(valor);

if(valor == "1"){ // si es igual a 4 que significa "otro"
  document.getElementById('otraInstitucion').style.display = 'none';//si no lo volvemos a ocultar
  document.getElementById('unidadAcademica').style.display = 'block'; //mostramos el id que contiene el input
  
}else if(valor == "2"){
document.getElementById('unidadAcademica').style.display = 'none'; //mostramos el id que contiene el input
document.getElementById('otraInstitucion').style.display = 'block';//si no lo volvemos a ocultar

}else{
  document.getElementById('unidadAcademica').style.display = 'none'; 
  document.getElementById('otraInstitucion').style.display = 'none';
}

}
</script>


<body style="background-color:  #2439e6;">

<div id="loader">
    <img src="https://i.gifer.com/ZZ5H.gif" alt="Cargando..."> <br>
    <p>  &nbsp; Cargando su información, por favor espere un momento, no cierre ni actualice esta ventana...</p>
  </div>

<div class="container-fluid">
        <div class="row">
          <div class="col" >

          

        
          <div  style="width:90%; margin-left:5%; background-color: white; padding:20px; border-radius:10px;">

          <img src="../admin/assets/img/banner1.jpg" style="width: 100%;" alt="CECYBOT 2025">

          <h2 class="text-center">REGISTRO DE EQUIPOS</h2> <br>

         
<div>
<p> <span class="font-weight-bold"> Datos de pago: </span></p>

<p><strong>Banco:</strong> BBVA Bancomer</p>

<p><strong>No. de cuenta:</strong>  010 823 4469 </p>

<p><strong>CLABE Interbancaria:</strong>  0122 1500 1082 3446 92 </p>

<p> <strong>Nombre del destinatario:</strong> CAJA POPULAR DR. JOSE MA. LUIS MORA SC DE RL DE CV</p>

<p> <span style="color: red; font-weight: bold;"> * Importante: </span> En el concepto o motivo de pago favor de colocar el <strong>"Nombre de tu equipo"</strong>  que con el que será registrado.</p>

 <p> </p>

 <table>
        <tr>
            <th><span class="font-weight-bold">Cuota de Inscripción: </span></th>
           
        </tr>
        <tr>
            <td>$250.00 MXN</td> 
        </tr>
        
    </table>
</div>
      <hr>
          
            <form action="../lib/verificar_inscripcion.php" method="post" id="formQR">

            
           
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