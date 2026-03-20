<!DOCTYPE HTML>
<html>
<head>
	<title>Registro | CECYBOT 2026</title>
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
        <h5 class="modal-title" id="exampleModalLongTitle">Registro completado con éxito</h5>
      </div>
      <div class="modal-body">
      <img src="../admin/assets/img/logo.png" class="d-block mx-auto w-50">
      <br>
      <p>Da clic en “Descargar Comprobante” y guarda o imprime tu registro con el código QR, ya que será necesario presentarlo el día del evento. </p>
        <br>
      <a href="search.php?id=<?php echo $id ?>" class="btn btn-info btn-lg">Descargar Comprobante de Registro QR</a>
      <p>En caso de extraviarlo, podrás descargarlo nuevamente desde la opción “Recuperar comprobante de registro” desde la página de inicio.</p>
      <hr>
     <p>¡Nos vemos el 05 de junio en el evento!</p>
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

