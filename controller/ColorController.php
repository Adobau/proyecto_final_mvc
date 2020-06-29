<?php

require_once 'model/Color.php';

class ColorController{
    
    private $model;
    
    public function __CONSTRUCT(){
        //inicializa el modelo
        $this->model = new Color();
    }
       
    public function Index(){
        //muestra todas las partes de la vista read
        require_once 'view/pages/header.php';
        require_once 'view/pages/read/read_color.php';
        require_once 'view/pages/foot_read.php';
    }
       
    // vista crear una Color
    public function CrearColor(){
        //muestra todas las partes de la vista create
        require_once 'view/pages/header.php';
        require_once 'view/pages/create/create_color.php';
        require_once 'view/pages/foot.php';
    }

    // guardar Color
    public function RegistrarColor(){
        //tomar todos los datos
        $this->model->nombre = $_REQUEST["nombre"];

        //guardar la Color
        $this->model->RegistrarColor($this->model);

        //muestra la vista read
        echo "<script>
                alert('CORRECTO: Los datos fueron guardados.');
                window.location.href='?c=".base64_encode('Color')."';
            </script>";
        
    }

    // vista editar Color
    public function EditarColor(){
        //tomar el id
        $idcolor = base64_decode($_REQUEST["idcolor"]);

        //obtener el registro con ese id
        $color = $this->model->ObtenerColor($idcolor);

        //muestra todas las partes de la vista create
        require_once 'view/pages/header.php';
        require_once 'view/pages/update/update_color.php';
        require_once 'view/pages/foot.php';
        
    }

    // actualizar usuario
    public function ActualizarColor(){
        //tomar todos los datos
        $this->model->idcolor = $_REQUEST["idcolor"];
        $this->model->nombre = $_REQUEST["nombre"];

        //actualizar el Color
        $this->model->ActualizarColor($this->model);

        echo "<script>
                alert('CORRECTO: Registro modificado.');
                window.location.href='?c=".base64_encode('Color')."';
            </script>";
        
    }

    // cambiar estado
    public function CambiarEstado(){
        //tomar id y nuevo estado
        $idcolor = base64_decode($_REQUEST["idcolor"]);
        $nuevo_estado = base64_decode($_REQUEST["nuevo_estado"]);

        //cambiar estado
        $this->model->CambiarEstadoColor($nuevo_estado, $idcolor);

        //muestra la vista read
        echo "<script>
                alert('CORRECTO: Registro modificado.');
                window.location.href='?c=".base64_encode('Color')."';
            </script>";
        
    }
    
}

?>