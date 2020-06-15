<?php namespace Config;

class Request{

        private $controlador;
		private $metodo;
		private $argumento;

		public function __construct(){
              
              if(isset($_GET['url'])){
				// FILTER_SANITIZE_URL elimina todos los caracteres URL ilegales de una cadena.
				//                     int $type , string $variable_name
				$ruta = filter_input(INPUT_GET, 'url', FILTER_SANITIZE_URL);
                ///print_r(INPUT_GET);
                

                $ruta = explode("/", $ruta);
				
                
				$ruta = array_filter($ruta);
				
                
				if($ruta[0] == "index.php"){

					$this->controlador = "estudiantes";
				}else{                              //quita el primer elemento del array 
					                     //strtolower coloca en minuscula
					$this->controlador = strtolower(array_shift($ruta));
					
				}
                
				//se obtine el metodo          
				$this->metodo = strtolower(array_shift($ruta));
                

				if(!$this->metodo){
					$this->metodo = "index";
				}

				$this->argumento = $ruta;
			}else{
				$this->controlador = "estudiantes";
				$this->metodo = "index";
			}

		}


		public function getControlador(){
			return $this->controlador;
		}

		public function getMetodo(){
			return $this->metodo;
		}

		public function getArgumento(){
			return $this->argumento;
		}


}

?>