<?php
require_once '../../admin/class/Registro.php';
include 'qr/barcode.php';
$registro = new Registro(); 
$generator = new barcode_generator();

if($_SERVER['REQUEST_METHOD'] == 'POST'){

/* $isLocal = ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1');
if ($isLocal) {
    $captchaValido = true;
} else { */

$secretKey = "6LdwAJUsAAAAAMRtxHJO_jUBluxzbyu73BNqK0oX";
$responseKey = $_POST['g-recaptcha-response'];
$userIP = $_SERVER['REMOTE_ADDR'];

$verify = file_get_contents(
    "https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$responseKey&remoteip=$userIP"
);

$response = json_decode($verify);

if (!$response->success) {
    die("Por favor verifica que no eres un robot.");
}
//}
    

$nombre_equipo = (isset($_POST['nombre_equipo'])) ? $_POST['nombre_equipo'] : null;
$url_imagen1 = (isset($_REQUEST['url_imagen1'])) ? $_REQUEST['url_imagen1'] : null;  
$url_imagen2 = (isset($_REQUEST['url_imagen2'])) ? $_REQUEST['url_imagen2'] : null;      
$coach = (isset($_POST['coach'])) ? $_POST['coach'] : null;
$integrante1 = (isset($_REQUEST['integrante1'])) ? $_REQUEST['integrante1'] : null;
$integrante2 = (isset($_POST['integrante2'])) ? $_POST['integrante2'] : null;
$integrante3 = (isset($_POST['integrante3'])) ? $_POST['integrante3'] : null;
$integrante4 = (isset($_POST['integrante4'])) ? $_POST['integrante4'] : null;
$categoria = (isset($_POST['categoria'])) ? $_POST['categoria'] : null;
$seleccionInstitucion = (isset($_POST['seleccionInstitucion'])) ? $_POST['seleccionInstitucion'] : null;
$unidadAcademica = (isset($_POST['unidadAcademica'])) ? $_POST['unidadAcademica'] : null;
$otraInstitucion = (isset($_POST['otraInstitucion'])) ? $_POST['otraInstitucion'] : null;
$email = (isset($_POST['email'])) ? $_POST['email'] : null;
$tel = (isset($_POST['tel'])) ? $_POST['tel'] : null;
$url_comprobante = (isset($_REQUEST['url_comprobante'])) ? $_REQUEST['url_comprobante'] : null; 
$url_qr = (isset($_REQUEST['url_qr'])) ? $_REQUEST['url_qr'] : null; 

if($unidadAcademica != ""){
$institucion =  "CECYTEG Plantel ".$unidadAcademica;
}else{
$institucion = $otraInstitucion;
}

      $registro->setNombreEquipo($nombre_equipo);
      $registro->setcoach($coach);
      $registro->setintegrante1($integrante1);
      $registro->setintegrante2($integrante2);
      $registro->setintegrante3($integrante3);
      $registro->setintegrante4($integrante4);
      $registro->setCategoria($categoria);
      $registro->setInstitucion($institucion);
      $registro->setEmail($email);
      $registro->setTel($tel);
      $registro->setUrlQr(""); 
      
    
       $rutaServidorLogos = 'uploads/logos';
       $rutaServidorComprobantes = 'uploads/comprobantes';
      
       
      if ($_FILES['url_img']['name']!=null) {

              /* if (!is_dir('uploads/logos')) {
                mkdir('uploads/logos', 0777, true); 
              } */
             
              $rutaTemporal = $_FILES['url_img']['tmp_name'];
              $extension = pathinfo($_FILES['url_img']['name'], PATHINFO_EXTENSION);
              $nombre_equipoImagen = 'logo_'. $nombre_equipo .'_'.date('YmdHis').'.'.$extension;
              $rutaDestino = $rutaServidorLogos.'/'.$nombre_equipoImagen;
              unlink($url_imagen1);
              move_uploaded_file($rutaTemporal, '../../admin/modules/registros/'.$rutaDestino); 
              $registro->setUrlImagen($rutaDestino); 
            
        } else{
        $registro->setUrlImagen('uploads/logos/logo_temporal.jpg');    
      } 


      if ($_FILES['url_pago']['name']!=null) {

      /*   if (!is_dir('uploads/comprobantes')) {
          mkdir('uploads/comprobantes', 0777, true); 
        } */
       
        $rutaTemporal = $_FILES['url_pago']['tmp_name'];
        $extension = pathinfo($_FILES['url_pago']['name'], PATHINFO_EXTENSION);
        $nombre_equipoComprobante = 'comprobante_'. $nombre_equipo .'_'.date('YmdHis').'.'.$extension;
        $rutaDestino = $rutaServidorComprobantes.'/'.$nombre_equipoComprobante;
        unlink($url_imagen2);
        move_uploaded_file($rutaTemporal, '../../admin/modules/registros/'.$rutaDestino); 
        $registro->setUrlComprobante($rutaDestino); 
      
  } else{
  $registro->setUrlComprobante($url_imagen2);    
} 

    //Guardar registro del equipo
    $registro->guardar();

    //Generar QR del Registro
    if($registro->getId()){

      $id = $registro->getId();

    /* Generate SVG markup and write to standard output. */
      $data_qr = 'https://cecybot2026.com/registro/search.php?id='.$id;
      $file_name_qr = $id.'.svg';
      $url_qr = 'uploads/qr/'.$file_name_qr;
      header('Content-Type: image/svg+xml');
      $svg = $generator->render_svg('qr', $data_qr , '');
      file_put_contents('../../admin/modules/registros/'.$url_qr, $svg); 
      $registro->actualizarQR($id, $url_qr);

      //Send Email

     /*  define("DEMO", false); 
        
        
            $template_file = "../email_template/template_notificacion.php";
        
            $email_from = "Registro CECYBOT2025 <admin@cecybot2025.com>";
        
        
            $swap_var = array(
                "{SITE_ADDR}" => "https://cecybot2025.com",
                "{EMAIL_TITLE}" => "Registro ".$registro->getNombreEquipo(),
                "{NOMBRE_EQUIPO}" => $registro->getNombreEquipo(),
                "{URL_QR}" => "https://cecybot2025.com/admin/modules/registros/uploads/qr/".$file_name_qr,
                "{DATA_QR}" => $data_qr,
            );
        
        
            $email_headers = "From: ".$email_from."\r\nReply-To: ".$email_from."\r\n";
            $email_headers .= "MIME-Version: 1.0\r\n";
            $email_headers .= "Content-Type: text/html; charset=UTF-8 \r\n";
        
        
            $email_to = $email;
            $email_subject = $swap_var['{EMAIL_TITLE}']; 
        
        
            if (file_exists($template_file)){
                $email_message = file_get_contents($template_file);
            }else{
                die ("Error al cargar el template");
            }
            
            foreach (array_keys($swap_var) as $key){
                if (strlen($key) > 2 && trim($swap_var[$key]) != '')
                    $email_message = str_replace($key, $swap_var[$key], $email_message);
            }
        
           
            if (mail($email_to, $email_subject, $email_message, $email_headers) ){ 
              */
              header('Location: ../confirm.php?id='.$id);
              exit();

        /*   }else{
          

            echo "Se ha producido un error";
        }
         

      
    }else{
      echo "Se ha producido un error";
    } */

  }  
        
}    
