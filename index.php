<?php
define('DS', DIRECTORY_SEPARATOR);
define('ROOT', realpath(dirname(__FILE__)) . DS);
define('URL', 'http://localhost/desarrollos/namespace-autoload/rest/');

require_once "Config/Autoload.php"; // carga todo los archivos que estan en la carpeta Config
Config\Autoload::rungg();

Config\Enrutador::run(new Config\Request());

?>