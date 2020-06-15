<?php
namespace Controllers;
use Models\Auth;

class authController extends ControllerControllers{

   private $auth;

   public function __construct(){
   	   parent::__construct();
   	   $this->auth = new Auth;
   }
	

	public function index(){
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
             print_r($this->dataObject->nombre);
             $user = $this->auth->login($this->dataObject);
             echo json_encode($user);
             header("HTTP/1.1 200 OK");
        }
        header("HTTP/1.1 400 Bad Request"); 
      
     }
    
     public function register(){
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            $user = $this->auth->register($this->dataObject);
        }
        header("HTTP/1.1 400 Bad Request"); 
     }

 }