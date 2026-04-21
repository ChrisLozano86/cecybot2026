<?php
require_once '../../admin/class/Registro.php';


if($_SERVER['REQUEST_METHOD'] == 'POST'){

$qr = (isset($_POST['qr'])) ? $_POST['qr'] : null;

echo $qr;


}else{}