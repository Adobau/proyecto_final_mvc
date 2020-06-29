<?php

/*
    Lo que el controlador hace es interactuar con el usuario
    - Este recibe peticiones 
    - Manda la información al modelo para procesarla
    - Carga las vistas como respuesta al usuario
*/

class HomeController{
       
    public function Index(){
        //muestra todas las partes de la vista home
        require_once 'view/pages/header.php';
        require_once 'view/home.php';
        require_once 'view/pages/foot.php';
    }
    
}

?>