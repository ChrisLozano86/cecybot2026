<?php
require_once 'Conexion.php';

class Registro {

    private $id;
    private $nombre_equipo;
    private $coach;
    private $integrante1;
    private $integrante2;
    private $integrante3;
    private $integrante4;
    private $categoria;
    private $institucion;
    private $email;
    private $tel;
    private $url_imagen;
    private $url_comprobante;
    private $url_qr;
    private $fecha_registro;
    
    
    

    const TABLA = 'registro';
    
  
    
    public function __construct($nombre_equipo=null, $coach=null,  $integrante1=null, $integrante2=null, $integrante3=null, $integrante4=null, $categoria=null, $institucion=null, $email=null, $tel=null, $url_imagen=null, $url_comprobante=null, $url_qr=null, $fecha_registro=null,  $id=null) {
       
        $this->nombre_equipo = $nombre_equipo;
        $this->coach = $coach;
        $this->integrante1 = $integrante1;
        $this->integrante2 = $integrante2;
        $this->integrante3 = $integrante3;
        $this->integrante4 = $integrante4;
        $this->categoria = $categoria;
        $this->institucion = $institucion;
        $this->email = $email;
        $this->tel = $tel;
        $this->url_imagen = $url_imagen;
        $this->url_comprobante = $url_comprobante;
        $this->url_qr = $url_qr;
        $this->fecha_registro = $fecha_registro;
        $this->id = $id;
        

    }

    //Getters
    
    public function getId() {
        return $this->id;
    }

    public function getCoach() {
        return $this->coach;
    }

    public function getNombreEquipo() {
        return $this->nombre_equipo;
    }

    public function getIntegrante1() {
        return $this->integrante1;
    }

    public function getIntegrante2() {
        return $this->integrante2;
    }
    

    public function getIntegrante3() {
        return $this->integrante3;
    }

    public function getIntegrante4() {
        return $this->integrante4;
    }


    public function getCategoria() {
        return $this->categoria;
    }
    
    public function getInstitucion() {
        return $this->institucion;
    }


    public function getEmail() {
        return $this->email;
    }

    public function getTel() {
        return $this->tel;
    }
    public function getUrlImagen() {
        return $this->url_imagen;
    }

    public function getUrlComprobante() {
        return $this->url_comprobante;
    }

    public function getUrlQr() {
        return $this->url_qr;
    }

    public function getFechaRegistro() {
        return $this->fecha_registro;
    }

    //Setters

    public function setCoach($coach) {
        $this->coach = $coach;
    }

    public function setNombreEquipo($nombre_equipo) {
        $this->nombre_equipo = $nombre_equipo;
    }

    public function setIntegrante1($integrante1) {
        $this->integrante1 = $integrante1;
    }

    public function setIntegrante2($integrante2) {
        $this->integrante2 = $integrante2;
    }

    public function setIntegrante3($integrante3) {
        $this->integrante3 = $integrante3;
    }

    public function setIntegrante4($integrante4) {
        $this->integrante4 = $integrante4;
    }

    public function setCategoria($categoria) {
        $this->categoria = $categoria;
    }

    public function setInstitucion($institucion) {
        $this->institucion = $institucion;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setTel($tel) {
         $this->tel = $tel;
    }

    public function setUrlImagen($url_imagen) {
        $this->url_imagen = $url_imagen;
   }

   public function setUrlComprobante($url_comprobante) {
    $this->url_comprobante = $url_comprobante;
   }

   public function setUrlQr($url_qr) {
    $this->url_qr = $url_qr;
   }
    public function setFechaRegistro($fecha_registro) {
    $this->fecha_registro = $fecha_registro;
   } 
    
   

  

    public function guardar() {
        $conexion = new Conexion();
        if($this->id)/*UPDATE*/{
            $consulta = $conexion->prepare('UPDATE ' . self::TABLA . ' SET  nombre_equipo = :nombre_equipo, coach = :coach,  integrante1 = :integrante1, integrante2 = :integrante2, integrante3 = :integrante3, integrante4 = :integrante4, categoria = :categoria, institucion = :institucion, email = :email, tel = :tel, url_imagen = :url_imagen, url_comprobante = :url_comprobante, url_qr = :url_qr  WHERE id = :id');
            $consulta->bindParam(':id', $this->id);
            $consulta->bindParam(':nombre_equipo', $this->nombre_equipo);         
            $consulta->bindParam(':coach', $this->coach);
            $consulta->bindParam(':integrante1', $this->integrante1); 
            $consulta->bindParam(':integrante2', $this->integrante2);             
            $consulta->bindParam(':integrante3', $this->integrante3); 
            $consulta->bindParam(':integrante4', $this->integrante4);   
            $consulta->bindParam(':categoria', $this->categoria);  
            $consulta->bindParam(':institucion', $this->institucion);  
            $consulta->bindParam(':email', $this->email);  
            $consulta->bindParam(':tel', $this->tel);  
            $consulta->bindParam(':url_imagen', $this->url_imagen);  
            $consulta->bindParam(':url_comprobante', $this->url_comprobante);  
            $consulta->bindParam(':url_qr', $this->url_qr);  
            $consulta->execute();
        }else /*Insert*/{
            $consulta = $conexion->prepare('INSERT INTO ' . self::TABLA . ' (nombre_equipo, coach, integrante1, integrante2, integrante3, integrante4, categoria, institucion, email, tel, url_imagen, url_comprobante, url_qr) VALUES (:nombre_equipo, :coach, :integrante1, :integrante2, :integrante3, :integrante4, :categoria, :institucion, :email, :tel, :url_imagen, :url_comprobante, :url_qr)');
            $consulta->bindParam(':nombre_equipo', $this->nombre_equipo);         
            $consulta->bindParam(':coach', $this->coach);
            $consulta->bindParam(':integrante1', $this->integrante1); 
            $consulta->bindParam(':integrante2', $this->integrante2);             
            $consulta->bindParam(':integrante3', $this->integrante3); 
            $consulta->bindParam(':integrante4', $this->integrante4);  
            $consulta->bindParam(':categoria', $this->categoria);  
            $consulta->bindParam(':institucion', $this->institucion);  
            $consulta->bindParam(':email', $this->email);  
            $consulta->bindParam(':tel', $this->tel);  
            $consulta->bindParam(':url_imagen', $this->url_imagen);  
            $consulta->bindParam(':url_comprobante', $this->url_comprobante);  
            $consulta->bindParam(':url_qr', $this->url_qr);  
            //var_dump($consulta);
            if($consulta->execute()){
                $this->id = $conexion->lastInsertId();
                
                return true;
            }else{       
                return false;
                
            }
        }
           
            $conexion = null;
    }


    
    public function eliminar(){
        
        $conexion = new Conexion();
        $consulta = $conexion->prepare('DELETE FROM ' . self::TABLA . ' WHERE id = :id');
        $consulta->bindParam(':id', $this->id);
        $consulta->execute();
        $conexion = null;
    }

    public static function buscarPorId($id) {
        $conexion = new Conexion();
        $consulta = $conexion->prepare('SELECT * FROM ' . self::TABLA . ' WHERE id = :id');
        $consulta->bindParam(':id', $id);
        $consulta->execute();
        $registro = $consulta->fetch();
        //print_r($registro);
        $conexion = null;
        if ($registro) {
           
            return new self($registro['nombre_equipo'], $registro['coach'], $registro['integrante1'],  $registro['integrante2'], $registro['integrante3'], $registro['integrante4'], $registro['categoria'], $registro['institucion'], $registro['email'], $registro['tel'], $registro['url_imagen'], $registro['url_comprobante'], $registro['url_qr'], $registro['fecha_registro'], $registro['id']);
            
        } else {
            return false;
            
        }
    }

 

    public static function recuperarTodos() {
        $conexion = new Conexion();
        $consulta = $conexion->prepare('SELECT * FROM ' . self::TABLA. ' ORDER BY id ASC');
        $consulta->execute();
        $registros = $consulta->fetchAll();
  
        $conexion = null;
        return $registros;
    }

    

    public function actualizarQR($id, $url_qr){
        
        $conexion = new Conexion();
        $consulta = $conexion->prepare('UPDATE ' . self::TABLA . ' SET url_qr = :url_qr  WHERE id = :id');
        $consulta->bindParam(':id', $id);
        $consulta->bindParam(':url_qr', $url_qr);
        $consulta->execute();
        $conexion = null;
    }

    public static function recuperarComprobantes($email) {
        $conexion = new Conexion();
        $consulta = $conexion->prepare('SELECT * FROM ' . self::TABLA. ' WHERE email = :email');
        $consulta->bindParam(':email', $email);
        $consulta->execute();
        $registros = $consulta->fetchAll();
  
        $conexion = null;
        return $registros;
    }

    public static function recuperarPorCategoria($categoria) {
        $conexion = new Conexion();
        $consulta = $conexion->prepare('SELECT * FROM ' . self::TABLA . ' WHERE categoria = :categoria');
        $consulta->bindParam(':categoria', $categoria);
        $consulta->execute();
        $registros = $consulta->fetchAll();
  
        $conexion = null;
        return $registros;
    }


}
