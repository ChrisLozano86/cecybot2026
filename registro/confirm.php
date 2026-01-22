<!DOCTYPE HTML>
<html>
<head>
	<title>Registro | CECYBOT 2025</title>
	  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- Theme style -->
   <link rel="stylesheet" href="../admin/assets/css/adminlte.css">
<!-- jQuery -->
<script src="../admin/assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../admin/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
</head>
<body>
  <?php 
  if (isset($_GET['id'])) {
    $id = $_GET['id'];
  ?>
<!-- Modal -->
<div class="modal fade" id="LoginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Registro completado</h5>
      </div>
      <div class="modal-body">
      <img src="../admin/assets/img/logo.png" class="d-block mx-auto w-50">
      <br>
      <p>El registro de su equipo se ha realizado correctamente, se ha enviado un correo electrónico con la información, si el correo electrónico no aparece en su bandeja de entrada, revise en bandeja de spam o correo no deseado
        de igual manera en el siguiente botón puede descargar su comprobante de registro</p>
        <br>
      <a href="search.php?id=<?php echo $id ?>" class="btn btn-info btn-lg">Descargar Comprobante de Registro</a>
      <p>Por favor guarde, imprima o saque captura del codigo QR que se genere de su registro para cualquier aclaración el día de la compentencia</p>
      <hr>
     <p>¡Nos vemos el 21 de mayo en el evento!</p>
     <!-- <p>Si tienes alguna duda, contactanos por WhatsApp al número 000-00000 </p> -->
      </div>

    </div>
  </div>
</div>
  
<script>
  $( document ).ready(function() {
    $('#LoginModal').modal({backdrop: 'static', keyboard: false})
    $('#LoginModal').modal('toggle')
  });
  </script>

  <?php
  }else{
    header('Location: index.php');
  }
  ?>
</body>

</html>

