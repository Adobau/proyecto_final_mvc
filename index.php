<?php
//iniciamos la sesión
session_start();

//para las conexiones a la base de datos
require_once 'model/Conexion.php';  

  $controller = 'Login';

  if(!isset($_REQUEST['c']))
  {
  
      require_once 'controller/'.$controller.'Controller.php';

    
      $controller = $controller.'Controller'; //LoginController

      $controller = new $controller;

      $controller->Index();    
  }
  else 
  {
    $controller = base64_decode($_REQUEST['c']);

    $accion = isset($_REQUEST['a']) ? base64_decode($_REQUEST['a']) : 'Index';
    
    
    require_once 'controller/'.$controller.'Controller.php';

 
    $controller = $controller.'Controller'; //UsuarioController

   
    $controller = new $controller;
    
    //esta función llama el nombre del controlador y la acción solicitadas
    //de modo que se acceda al archivo controlador y se ejecute la 
    //acción correspondiente
    call_user_func(array( $controller, $accion ) );
}

?>