<?php
require_once '../../class/Registro.php';
include_once '../../assets/template/header.php';
$registros = Registro::recuperarTodos(); 
?>

<!-- Main content -->
    <div class="content" id="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col">
            
            <h3 class="text-center"> Registros de equipos </h3>
            
              
              <?php  
              
              if (count($registros) > 0): ?>
             

            <table class="table table-bordered" id="table-data" >
  <thead class="thead-dark">
    <tr class="text-center">
    
   <!--  <th scope="col">Logo</th> -->
      <th scope="col">Equipo</th>
      
      <th scope="col">Categoría</th>
      <th scope="col">Email</th>
      <th scope="col">Teléfono</th>
     
      <th scope="col">Fecha de registro</th>
      <th scope="col">Verificar Registro</th>
     
    </tr>
  </thead>
  <tbody>
  <?php foreach ($registros as $item): ?>

 
    <tr>  
      <!-- <td> <img src="<?php //echo $item['url_imagen']; ?>" width="120" height="150"></td> -->
      <td><?php echo $item['nombre_equipo']; ?></td>
      
      <td><?php echo $item['categoria']; ?></td>
      <td><?php echo $item['email']; ?></td>
      <td><?php echo $item['tel']; ?></td>
     
      <td><?php echo date("d/m/Y", strtotime($item['fecha_registro'])); ?></td>
     <?php
      if($item['verificado'] == "SI"){
        ?>
        <td class="text-center"><span class="btn btn-success btn-sm">Verificado</span></td>
        <?php
      }else{
        ?>
<td class="text-center">
        <form action="verificar_registro.php" method="post">
          <input type="hidden" name="qr" value="<?php echo $item[0]; ?>">
          <input type="submit" class="btn btn-warning btn-sm" value="Haz clic para verificar registro">
        </form>
</td>
     <?php
      }
      ?>
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