<?php

session_start();
date_default_timezone_set('America/Sao_Paulo');

require('vendor/autoload.php');
  
define('INCLUDE_PATH_STATIC','http://localhost/Projeto%20CopyGenerator/App/Views/pages/');

define('INCLUDE_PATH','http://localhost/Projeto%20CopyGenerator/');

$app = new App\Application();

$app->run();

?>