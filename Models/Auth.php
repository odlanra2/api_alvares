<?php
namespace Models;
use Models\Auth;

class Auth{
  
   private $con;
   
   public function __construct(){
      $this->con = new Conexion();
   }
	

	private function login($users){
    
           $usuario = [];
           $sql = "SELECT * FROM usuarios WHERE correo_electronico='$nombre'";
		   $datos = $this->con->consultaRetorno($sql);
		   $count = mysqli_num_rows($datos);
		   $row = mysqli_fetch_object($datos);
		    
		    if($count>0){
		    	  if (password_verify($clave, $row->clave)) {				
					$usuario['id']=$row->idusuario;
					$usuario['nombre']=$row->correo_electronico;
					$usuario['clave']=$row->clave;
			    }
		    }
		   	
			return $usuario;
   
	}
}