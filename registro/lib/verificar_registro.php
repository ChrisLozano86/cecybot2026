<?php
require_once '../../admin/class/Registro.php';


if($_SERVER['REQUEST_METHOD'] == 'POST'){

$id_qr = (isset($_POST['qr'])) ? $_POST['qr'] : null;

$registro = new Registro();
 $registro->setVerificado("SI");
 $registro->setUrlQR($id_qr);
$registro->checkin();
header("Location: ../../check/index.php?status=ok");
exit;


}else{
    header("Location: ../../check/index.php?status=error");
    exit;
}