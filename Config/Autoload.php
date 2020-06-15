<?php namespace Config;

class Autoload {

	public static function rungg (){
		spl_autoload_register( function($class){
		                        //se remplaza la barra se coloca doble para que no de error
		    $ruta = str_replace("\\", "/", $class) . ".php";
            include_once $ruta;
        
		});
	}
}


?>