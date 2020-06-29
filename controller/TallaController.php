<?php

require_once 'model/Talla.php';

class TallaController{
    
    private $model;
    
    public function __CONSTRUCT(){
        //inicializa el modelo
        $this->model = new Talla();
    }
       
    public function Index(){
        //muestra todas las partes de la vista read
        require_once 'view/pages/header.php';
        require_once 'view/pages/read/read_size.php';
        require_once 'view/pages/foot_read.php';
    }
       
    // vista crear una talla
    public function CrearTalla(){
        //muestra todas las partes de la vista create
        require_once 'view/pages/header.php';
        require_once 'view/pages/create/create_size.php';
        require_once 'view/pages/foot.php';
    }

    // guardar Talla
    public function RegistrarTalla(){
        //tomar todos los datos
        $this->model->nombre = $_REQUEST["nombre"];

        //guardar la Talla
        $this->model->RegistrarTalla($this->model);

        //muestra la vista read
        echo "<script>
                alert('CORRECTO: Los datos fueron guardados.');
                window.location.href='?c=".base64_encode('Talla')."';
            </script>";
        
    }

    // vista editar talla
    public function Editartalla(){
        //tomar el id
        $idtalla = base64_decode($_REQUEST["idtalla"]);

        //obtener el registro con ese id
        $talla = $this->model->ObtenerTalla($idtalla);

        //muestra todas las partes de la vista create
        require_once 'view/pages/header.php';
        require_once 'view/pages/update/update_size.php';
        require_once 'view/pages/foot.php';
        
    }

    // actualizar usuario
    public function ActualizarTalla(){
        //tomar todos los datos
        $this->model->idtalla = $_REQUEST["idtalla"];
        $this->model->nombre = $_REQUEST["nombre"];

        //actualizar el talla
        $this->model->ActualizarTalla($this->model);

        echo "<script>
                alert('CORRECTO: Registro modificado.');
                window.location.href='?c=".base64_encode('Talla')."';
            </script>";
        
    }

    // cambiar estado
    public function CambiarEstado(){
        //tomar id y nuevo estado
        $idtalla = base64_decode($_REQUEST["idtalla"]);
        $nuevo_estado = base64_decode($_REQUEST["nuevo_estado"]);

        //cambiar estado
        $this->model->CambiarEstadoTalla($nuevo_estado, $idtalla);

        //muestra la vista read
        echo "<script>
                alert('CORRECTO: Registro modificado.');
                window.location.href='?c=".base64_encode('Talla')."';
            </script>";
        
    }
    
}

?>