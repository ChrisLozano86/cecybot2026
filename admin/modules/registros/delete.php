<?php
    
     require_once '../../class/Registro.php';
  
    
    $id = (isset($_REQUEST['id'])) ? $_REQUEST['id'] : null;
    if($id){
        $registro = Registro::buscarPorId($id);        
        $registro->eliminar();
        unlink($registro->getUrlImagen()); 
        unlink($registro->getUrlComprobante()); 
        unlink($registro->getUrlQr()); 
        header('Location: index.php');
    }else{
        header('Location: index.php');
    }
    
?>