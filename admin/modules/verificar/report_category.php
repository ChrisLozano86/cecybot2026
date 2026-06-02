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
            
            <h3 class="text-center"> Reporte de asistencia de equipos al evento </h3>
            
              <form action="report.php" method="POST" target="_blank">
    <div class="form-group">
        <label>Categoría</label>
        <select name="categoria" class="form-control" required>
            <option value="">Seleccione una opción</option>
            <option value="TODOS">REPORTE COMPLETO</option>
            <option value="MINI SUMO RC">MINI SUMO RC</option>
            <option value="ROBOT SOCCER PROFESIONAL">ROBOT SOCCER PROFESIONAL</option>
            <option value="SEGUIDOR DE LINEA EDUCATIVO">SEGUIDOR DE LINEA EDUCATIVO</option>
            <option value="SEGUIDOR DE LINEA AMATEUR">SEGUIDOR DE LINEA AMATEUR</option>
        </select>
    </div>

    <button type="submit" class="btn btn-success">
        Generar Reporte de Asistencia
    </button>
</form>
             
          
            
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