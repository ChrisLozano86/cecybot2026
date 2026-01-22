<?php
require_once '../../class/Registro.php';
$registros = Registro::recuperarTodos(); 
$minisumo_rc = Registro::recuperarPorCategoria('MINI SUMO RC');
$robot_soccer_pro = Registro::recuperarPorCategoria('ROBOT SOCCER PROFESIONAL'); 
$robot_soccer_amateur = Registro::recuperarPorCategoria('ROBOT SOCCER AMATEUR'); 
$seguidor_educativo = Registro::recuperarPorCategoria('SEGUIDOR DE LINEA EDUCATIVO'); 
$seguidor_amateur = Registro::recuperarPorCategoria('SEGUIDOR DE LINEA AMATEUR'); 
include_once '../../assets/template/header.php';
?>

<!-- Main content -->
    <div class="content" id="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col">
            
            <h3 class="text-center"> Registros de equipos </h3>
            
              <a href="../../../registro/index.php" class="btn btn-default btn-custom" > <i class="fas fa-plus"></i> Registrar nuevo Equipo </a><br><br>
              <?php  
              
              if (count($registros) > 0): ?>
              <a href="report.php" class="btn btn-default btn-custom"> <i class="fas fa-file-excel"></i> Descargar Excel </a>
              <a href="download_logos.php" class="btn btn-default btn-custom"> <i class="fas fa-image"></i> Descargar Logos </a>
              <a href="download_tickets.php" class="btn btn-default btn-custom"> <i class="fas fa-file"></i> Descargar Comprobantes </a><br><br>
          
              <hr>
              <p> <strong>TOTAL DE EQUIPOS INSCRITOS: &nbsp;<?php echo count($registros) ?></strong> </p>

              <div class="estadisticas">

                <p>Mini sumo RC: <strong><?php echo count($minisumo_rc); ?></strong> </p>
                <p>Robot Soccer Profesional: <strong><?php echo count($robot_soccer_pro) ?></strong> </p>
                <p>Robot Soccer Amateur: <strong><?php echo count($robot_soccer_amateur) ?></strong> </p>
                <p>Seguidor de Línea Educativo: <strong><?php echo count($seguidor_educativo) ?></strong> </p>
                <p>Seguidor de Línea Amateur: <strong><?php echo count($seguidor_amateur) ?></strong> </p>
              </div>

              <hr>

            <table class="table table-bordered" id="table-data" >
  <thead class="thead-dark">
    <tr class="text-center">
    
    <th scope="col">Logo</th>
      <th scope="col">Equipo</th>
      <th scope="col">Coach</th>
      <th scope="col">Categoría</th>
      <th scope="col">Email</th>
      <th scope="col">Teléfono</th>
      <th scope="col">Comprobante Pago</th>
      <th scope="col">Fecha de registro</th>
      <th scope="col">Ver detalles</th>
      <?php if (isset($_SESSION['idRol']) && $_SESSION['idRol'] == 1) {?>
      <th scope="col">Eliminar</th>
      <?php } ?>
    </tr>
  </thead>
  <tbody>
  <?php foreach ($registros as $item): ?>

 
    <tr>  
      <td> <img src="<?php echo $item['url_imagen']; ?>" width="120" height="150"></td>
      <td><?php echo $item['nombre_equipo']; ?></td>
      <td><?php echo $item['coach']; ?></td>
      <td><?php echo $item['categoria']; ?></td>
      <td><?php echo $item['email']; ?></td>
      <td><?php echo $item['tel']; ?></td>
      <td class="text-center"><a href="<?php echo $item['url_comprobante']; ?>" target="_blank" class="btn btn-success fas fa-check-square"></a></td>
      <td><?php echo date("d/m/Y", strtotime($item['fecha_registro'])); ?></td>
      <?php if (isset($_SESSION['idRol']) && $_SESSION['idRol'] == 1) {?>
      <td class="text-center"><a href="save.php?id=<?php echo $item[0];?>" class="btn btn-info fas fa-edit"></a></td>
      <td class="text-center"><a href="delete.php?id=<?php echo $item[0];?>" onclick="return confirm('¿Está seguro que desea eliminar el registro de este equipo?')" class="btn btn-danger far fa-trash-alt"></a></td> 
      <?php }else{ ?>
        <td class="text-center"><a href="../../../registro/search.php?id=<?php echo $item[0];?>" class="btn btn-info fas fa-edit" target="_blank"></a></td>
        <?php } ?>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>


<?php else: ?>
            <p class="alert alert-info"> No se encontraron Registros de Equipos </p>
        <?php endif; ?>
          
            
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php
include_once '../../assets/template/footer.php';
?>