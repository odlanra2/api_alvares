<?php 
namespace Controllers;

class ControllerControllers{
        public  $JSONData;
	    public  $dataObject;
		
		public function __construct(){
           header('Access-Control-Allow-Origin: *');
		   header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
		   header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');

		  $this->JSONData = file_get_contents("php://input");
          $this->dataObject = json_decode($this->JSONData);

		}
	}
?>