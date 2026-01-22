<?php
session_start();
require_once '../admin/class/Registro.php';
$id = (isset($_REQUEST['id'])) ? $_REQUEST['id'] : null;

    if($id){        
        $registro = Registro::buscarPorId($id);   
          
    }else{

    }
?>
<!DOCTYPE HTML>
<html>
<head>
	<title>Consulta Registro | CECYBOT 2025</title>
	  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- Theme style -->
   <link rel="stylesheet" href="../admin/assets/css/adminlte.css">
<!-- jQuery -->
<script src="../admin/assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../admin/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<style>
    /* Ocultar solo durante la impresión */
    @media print {
      .no-print {
        display: none;
      }
    }

    
    input[type="text"] {
  background: transparent;
  border: none;
  outline: none;
  color: #333; /* Ajusta el color del texto si es necesario */
}
  </style>
  
</head>
<body style="background-color: #005B97;">

<div class="container-fluid">
        <div class="row">
          <div class="col" >

          <?php 
          if (isset($_REQUEST['id'])){
            
            $title = 'Equipo <strong> '.$registro->getNombreEquipo() .'</strong>';
            $date = date("d/m/Y", strtotime($registro->getFechaRegistro()));
          }
          ?>
          
          <div  style="width:80%; margin-left:10%; background-color: white; padding:20px; border-radius:10px;">
          <h1 class="text-center">Datos de registro</h1>
          <div style="display: inline-block; width: 50%; margin-left: 25%;">
          <img src="<?='../admin/modules/registros/'.$registro->getUrlQR(); ?>" style="float:left;" >
          <h3 style="line-height: 100px;"><?php echo $title ?></h3>
          <button class="btn btn-primary no-print" onclick="window.print()"> <i class="fas fa-file"></i>Imprimir Comprobante</button>
          
          </div>
           <br>
          
            <form action="#" method="post" id="registro_form" enctype="multipart/form-data">

            <div class="form-group">
            <input class="form-control" type="hidden" name="id" id="id" value="<?php echo $registro->getId(); ?>">
            </div>

            <div class="form-group">
            <input class="form-control" type="hidden" name="url_imagen1" id="url_imagen1" value="<?php echo $registro->getUrlImagen(); ?>">
            <input class="form-control" type="hidden" name="url_imagen2" id="url_imagen2" value="<?php echo $registro->getUrlComprobante(); ?>">
            <input class="form-control" type="hidden" name="url_qr" id="url_qr" value="<?php echo $registro->getUrlQr(); ?>">
          
          </div>

            <div class="form-group">
            <label for="url_img">Logo del equipo </label>
            <?php    if(isset($_REQUEST['id'])): ?>
              </br>
            <img src="<?='../admin/modules/registros/'.$registro->getUrlImagen(); ?>" style="width:150px" />
            </br></br>
            <?php endif; ?>
            </div>


            <div class="form-group">
            <label for="titulo">Nombre del equipo</label>
            <input class="form-control" type="text" name="nombre_equipo" id="nombre_equipo" value="<?php echo $registro->getNombreEquipo(); ?>" readonly>
            </div>

            <div class="form-group">
            <label for="contenido">Nombre del Coach o profesor que te asesora</label>
            <input class="form-control" type="text" name="coach" id="coach" value="<?php echo $registro->getCoach(); ?>" readonly>
            </div>  

            <div class="form-group">
              <label for="categoria">Categoria</label>
              <input class="form-control" type="text" name="categoria" id="categoria"  value="<?php echo $registro->getCategoria(); ?>" readonly>
            </div>

            <div class="form-group">
            <label for="contenido">Nombre del Integrante 1 (Capitán del Equipo)</label>
            <input class="form-control" type="text" name="integrante1" id="integrante1" value="<?php echo $registro->getIntegrante1(); ?>" readonly>
            </div>  

            <div class="form-group">
            <label for="integrante2">Nombre del Integrante 2</label>
            <input class="form-control" type="text" name="integrante2" id="integrante2" value="<?php echo $registro->getIntegrante2(); ?>" readonly>
            </div>
            
            <?php if (!empty($registro->getIntegrante3())): ?>
            <div class="form-group">
            <label for="integrante3">Nombre del Integrante 3</label>
            <input class="form-control" type="text" name="integrante3" id="integrante3" value="<?php echo $registro->getIntegrante3(); ?>" readonly>
            </div>
            <?php endif; ?>

            <?php if (!empty($registro->getIntegrante4())): ?>
            <div class="form-group">
            <label for="integrante4">Nombre del Integrante 4</label>
            <input class="form-control" type="text" name="integrante4" id="integrante4" value="<?php echo $registro->getIntegrante4(); ?>" readonly>
            </div>
            <?php endif; ?>

            <div class="form-group">
            <label for="institucion">Institución que representa</label>
            <input class="form-control" type="text" name="institucion" id="institucion"  value="<?php echo $registro->getInstitucion(); ?>" readonly>
            </div>

            <div class="form-group">
            <label for="email">Email</label>
            <input class="form-control" type="text" name="email" id="email"  value="<?php echo $registro->getEmail(); ?>" readonly>
            </div>

            <div class="form-group">
            <label for="tel">Número de contacto</label>
            <input class="form-control" type="text" name="tel" id="tel"  value="<?php echo $registro->getTel(); ?>" readonly>
            </div>

            <div class="form-group">
            <label for="integrante2">Fecha de registro</label>
            <input class="form-control" type="text" name="fecha_registro" id="fecha_registro"  value="<?php if($registro->getFechaRegistro()!= ""){ echo $date; }?>" readonly>
            </div>

           <!--  <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Guardar registros">
            </div>   -->
           
            </form>
            
            <?php if(!isset($_SESSION['idRol'])){?>
              <a href="../index.php" class="btn btn-info no-print">Cerrar</a>
            <?php } ?>

        
          
          <!-- /.col -->
        </div>
        </div>
</body>

</html>