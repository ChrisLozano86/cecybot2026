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

          <p>
Es importante que antes de realizar su registro debe haber realizado el pago de inscripción y tener una foto o PDF de su comprobante de pago. 
Si se realiza una transferencia electrónica de otro banco, deberá subir el comprobante de SPEI, favor de tramitar Comprobante de Pago Electrónico en <a href="https://www.banxico.org.mx/cep/">banxico.org.mx</a>
</p>
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
          <p>Los campos con <span class="text text-danger">*</span> son obligatorios.</p>
            <form action="lib/procesar_registro.php" method="post" id="registro_form" enctype="multipart/form-data" novalidate>

            <div class="form-group">
            <input class="form-control" type="hidden" name="id" id="id" value="<?php echo $registro->getId(); ?>">
            </div>

            <div class="form-group">
            <input class="form-control" type="hidden" name="url_imagen1" id="url_imagen1" value="<?php echo $registro->getUrlImagen(); ?>">
            <input class="form-control" type="hidden" name="url_imagen2" id="url_imagen2" value="<?php echo $registro->getUrlComprobante(); ?>">
          </div>

            <div class="form-group">
            <!-- label for="url_img">Logo del equipo </label><br>
            <small>Sube el logo de tu equipo en formato de imagen JPG, JPEG, PNG, con peso menor a 5MB. (Opcional) </small> -->
            <input type="file" class="form-control-file oculto" name="url_img" id="url_img">
            <!-- <small class="text-danger error-message" id="error-url_img"></small>  -->
            </div>
            <div class="form-group">
            <label for="titulo">Nombre del equipo <span class="text text-danger">*</span></label>
            <input class="form-control" type="text" name="nombre_equipo" id="nombre_equipo" value="">
            <small class="text-danger error-message" id="error-nombre_equipo"></small>
            </div>

            <div class="form-group">
            <label for="contenido">Nombre del Coach o profesor que te asesora</label>
            <input class="form-control" type="text" name="coach" id="coach" value="">
            <small class="text-danger error-message" id="error-coach"></small>
            </div>  

            <div class="form-group">
              <label for="categoria">Categoría <span class="text text-danger">*</span></label>
            <select name="categoria" id="categoria" class="form-control" style="width: 80%;">
            <option value="">Selecciona una categoría</option>
              <option value="MINI SUMO RC">Mini Sumo RC Profesional</option>
              <option value="ROBOT SOCCER PROFESIONAL">Robot Soccer Profesional</option>
              <!-- <option value="ROBOT SOCCER AMATEUR">Robot Soccer Amateur</option> -->
              <option value="SEGUIDOR DE LINEA EDUCATIVO">Seguidor de Línea (Kit Educativo)</option>
              <option value="SEGUIDOR DE LINEA AMATEUR">Seguidor de Línea Amateur</option>
            </select> 
            <small class="text-danger error-message" id="error-categoria"></small>
            </div>

            <div class="form-group">
            <label for="integrante1">Nombre del Integrante 1 (Capitán del equipo del Equipo) <span class="text text-danger">*</span></label>
            <input class="form-control" type="text" name="integrante1" id="integrante1" value="">
            <small class="text-danger error-message" id="error-integrante1"></small>
            </div>  

            <div class="form-group">
            <label for="integrante2">Nombre del Integrante 2</label>
            <input class="form-control" type="text" name="integrante2" id="integrante2" value="">
            </div>  
            
            <div class="form-group integrante-extra" id="grupo-integrante3" style="display: none;">
            <label for="integrante3">Nombre del Integrante 3</label>
            <input class="form-control" type="text" name="integrante3" id="integrante3" value="">
            </div>  

            <div class="form-group integrante-extra" id="grupo-integrante4" style="display: none;">
            <label for="integrante4">Nombre del Integrante 4</label>
            <input class="form-control" type="text" name="integrante4" id="integrante4" value="">
            </div>  

            <div class="form-group">
            <label for="institucioninstitucionSeleccionada">Institución que representas <span class="text text-danger">*</span></label>
            <select class="form-control" name="institucionSeleccionada" id="institucionSeleccionada"  style="width: 80%;" onchange="registrarUnidadAcademica()">
                    <option value="">Selecciona una opción</option>
                    <option value="1" >Colegio de Estudios Cientificos y Tecnológicos del Estado de Guanajuato</option>
                    <option value="2" >Otra Institución</option>
                  </select>
            <small class="text-danger error-message" id="error-institucionSeleccionada"></small>     
            </div>

            <div class="form-group" style="display: none;" id="unidadAcademica">               
                  <input type="text" class="form-control"  name="unidadAcademica" placeholder="Plantel al que pertences" />
            </div>

            <div class="form-group" style="display: none;" id="otraInstitucion">               
                  <input type="text" class="form-control" name="otraInstitucion"  placeholder="Nombre de la Institución a la que pertences" />
            </div>
            <div class="form-group">
            <label for="email">Email <span class="text text-danger">*</span></label>
            <input class="form-control" type="text" name="email" id="email"  value="">
            <small class="text-danger error-message" id="error-email"></small>
            </div>

            <div class="form-group">
            <label for="tel">Número de contacto <span class="text text-danger">*</span></label> <br>
            <small>A este número se enviarán notificaciones y avisos importantes previos a la competencia vía WhatsApp</small>
            <input class="form-control" type="text" name="tel" id="tel"  value="">
            <small class="text-danger error-message" id="error-tel"></small>
            </div>

            <div class="form-group">
            <label for="url_pago">Comprobante de pago <span class="text text-danger">*</span></label><br>
            <small> Sube tu comprobante de pago o transferencia, puede ser una foto de buena calidad o captura de pantalla en formato JPG, JPEG, PNG, o archivo en formato PDF. (Peso máximo 5MB.) </small>
            <input type="file" class="form-control-file" name="url_pago" id="url_pago">
            <small class="text-danger error-message" id="error-url_pago"></small>
            </div>

            <div class="form-group">
            <div class="g-recaptcha" data-sitekey="6LdwAJUsAAAAAB04pyZc03uIbZE5wILE4cpLb0uT"></div>
            </div>

            <div class="form-group">
            <input type="submit" class="btn btn-lg btn-primary" value="Registrar equipo">
            </div>  
           
            </form>

            <script>
document.getElementById("categoria").addEventListener("change", function () {
  const categoriaSeleccionada = this.value;
  const mostrarIntegrantes = categoriaSeleccionada === "ROBOT SOCCER AMATEUR" || categoriaSeleccionada === "ROBOT SOCCER PROFESIONAL";

  const integrante3 = document.getElementById("grupo-integrante3");
  const integrante4 = document.getElementById("grupo-integrante4");

  if (mostrarIntegrantes) {
    integrante3.style.display = "block";
    integrante4.style.display = "block";
  } else {
    // Ocultar y limpiar campos
    integrante3.style.display = "none";
    integrante4.style.display = "none";
    document.getElementById("integrante3").value = "";
    document.getElementById("integrante4").value = "";
  }
});
</script>
<!-- Validate -->
<script src="../admin/assets/js/registro_validate.js"></script> 

          </div>
          </div>
          <!-- /.col -->
        </div>
        </div>
</body>

</html>