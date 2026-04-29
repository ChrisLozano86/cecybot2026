<?php
require_once '../../class/Registro.php';


if($_SERVER['REQUEST_METHOD'] == 'POST'){

$id_qr = (isset($_POST['qr'])) ? $_POST['qr'] : null;


$verificado = Registro::buscarPorId($id_qr); 

if (!$verificado) {
    header("Location: index.php?status=error");
    exit;
}else{

$estatus_check =  $verificado->getVerificado();

if($estatus_check == "NO"){

$registro = new Registro();
$registro->setVerificado("SI");
$registro->setUrlQR($id_qr);
$registro->checkin();
header("Location: index.php?status=ok");
exit;

}

if($estatus_check == "SI"){
    header("Location: index.php?status=duplicado");
    exit;
} 

}




}else{
    header("Location: index.php?status=error");
    exit;
}