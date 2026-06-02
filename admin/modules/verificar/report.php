<?php
require_once '../../class/Registro.php';
header("Content-Type: application/xls");
header("Content-Type: application/vnd.ms-excel; charset=UTF-8");
header("Content-Disposition: attachment; filename= CECYBOT2026_ASISTENCIA.xls");

$category = $_POST['categoria'] ?? '';

if ($category === 'TODOS') {
    $registros = Registro::recuperarTodosVerificados();
} else {
    $registros = Registro::recuperarCategoriaVerificados($category);
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>REPORTE DE ASISTENCIA CECYBOT 2026 <?php if ($category != 'TODOS') { echo $category; } ?></title>
</head>
<body>
<table border="1">
  <thead>
    <tr class="text-center">
    
    
      <th scope="col">Equipo</th>
      <th scope="col">Coach</th>
      <th scope="col">Integrante 1</th>
      <th scope="col">Integrante 2</th>
      <th scope="col">Integrante 3</th>
      <th scope="col">Integrante 4</th>
      <th scope="col">Categor&iacute;a</th>
      <th scope="col">Instituci&oacute;n</th>
      <th scope="col">Email</th>
      <th scope="col">Tel&eacute;fono</th>
      
      
    </tr>
  </thead>
  <tbody>
  <?php foreach ($registros as $item): ?>

 
    <tr>  
      
      <td><?php echo $item['nombre_equipo']; ?></td>
      <td><?php echo $item['coach']; ?></td>
      <td><?php echo $item['integrante1']; ?></td>
      <td><?php echo $item['integrante2']; ?></td>
      <td><?php echo $item['integrante3']; ?></td>
      <td><?php echo $item['integrante4']; ?></td>
      <td><?php echo $item['categoria']; ?></td>
      <td><?php echo $item['institucion']; ?></td>
      <td><?php echo $item['email']; ?></td>
      <td><?php echo $item['tel']; ?></td>
      
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
</body>
</html>

