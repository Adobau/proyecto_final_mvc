<?php

require_once 'model/Usuario.php';
require_once 'model/TipoUsuario.php';
require_once 'model/PreguntaSecreta.php';

class UsuarioController{
    
    private $model;
    private $modelTipoUsuario;
    private $modelPreguntaSecreta;
    
    public function __CONSTRUCT(){
        //inicializa los modelos
        $this->model = new Usuario();
        $this->modelTipoUsuario = new TipoUsuario();
        $this->modelPreguntaSecreta = new PreguntaSecreta();
    }

    // home usuario  
    public function Index(){
        //muestra todas las partes de la vista read
        require_once 'view/pages/header.php';
        require_once 'view/pages/read/read_user.php';
        require_once 'view/pages/foot_read.php';
    }
       
    // vista crear un usuario
    public function CrearUsuario(){
        //muestra todas las partes de la vista create
        require_once 'view/pages/header.php';
        require_once 'view/pages/create/create_user.php';
        require_once 'view/pages/foot.php';
    }

    // guardar un usuario
    public function RegistrarUsuario(){
        //tomar todos los datos
        $this->model->nombre = $_REQUEST["nombre"];
        $this->model->apellido = $_REQUEST["apellido"];
        $this->model->telefono = $_REQUEST["telefono"];
        $this->model->email = $_REQUEST["email"];
        $this->model->clave = $_REQUEST["clave1"];
        $this->model->idpreguntasecreta = $_REQUEST["idpreguntasecreta"];
        $this->model->respuestasecreta = $_REQUEST["respuestasecreta1"];
        $this->model->idtipousuario = $_REQUEST["idtipousuario"];

        //guardar el usuario
        $this->model->RegistrarUsuario($this->model);

        //muestra la vista read
        echo "<script>
                alert('CORRECTO: Los datos fueron guardados.');
                window.location.href='?c=".base64_encode('Usuario')."';
            </script>";
        
    }

    // vista editar usuario
    public function EditarUsuario(){
        //tomar el id
        $idusuario = base64_decode($_REQUEST["idusuario"]);

        //obtener el registro con ese id
        $usuario = $this->model->ObtenerUsuario($idusuario);

        //muestra todas las partes de la vista create
        require_once 'view/pages/header.php';
        require_once 'view/pages/update/update_user.php';
        require_once 'view/pages/foot.php';
        
    }

    // actualizar usuario
    public function ActualizarUsuario(){
        //tomar todos los datos
        $this->model->idusuario = $_REQUEST["idusuario"];
        $this->model->nombre = $_REQUEST["nombre"];
        $this->model->apellido = $_REQUEST["apellido"];
        $this->model->telefono = $_REQUEST["telefono"];
        $this->model->email = $_REQUEST["email"];
        $this->model->idtipousuario = $_REQUEST["idtipousuario"];

        //actualizar el usuario
        $this->model->ActualizarUsuario($this->model);

        echo "<script>
                alert('CORRECTO: Registro modificado.');
                window.location.href='?c=".base64_encode('Usuario')."';
            </script>";
        
    }

    // cambiar estado
    public function CambiarEstado(){
        //tomar id y nuevo estado
        $idusuario = base64_decode($_REQUEST["idusuario"]);
        $nuevo_estado = base64_decode($_REQUEST["nuevo_estado"]);

        //cambiar estado
        $this->model->CambiarEstadoUsuario($nuevo_estado, $idusuario);

        //muestra la vista read
        echo "<script>
                alert('CORRECTO: Registro modificado.');
                window.location.href='?c=".base64_encode('Usuario')."';
            </script>";
        
    }

    // vista cambiar clave
    public function NuevaClave(){
        //obtener el registro con ese id
        $usuario = $this->model->ObtenerUsuario($_SESSION["id"]);

        //muestra todas las partes de la vista create
        require_once 'view/pages/header.php';
        require_once 'view/pages/update/update_password.php';
        require_once 'view/pages/foot.php';
        
    }

    // actualizar clave
    public function ActualizarClave(){
        //tomar todos los datos
        $idusuario = $_REQUEST["idusuario"];
        $clave = $_REQUEST["clave1"];

        //actualizar el usuario
        $this->model->ActualizarClave($clave, $idusuario);

        echo "<script>
                alert('CORRECTO: Registro modificado.\\n\\nNO OLVIDE SU NUEVA CLAVE.');
                window.location.href='?c=".base64_encode('Home')."';
            </script>";
        
    }

    // vista cambiar clave
    public function NuevaPregunta(){
        //obtener el registro con ese id
        $usuario = $this->model->ObtenerUsuario($_SESSION["id"]);

        //muestra todas las partes de la vista create
        require_once 'view/pages/header.php';
        require_once 'view/pages/update/update_question.php';
        require_once 'view/pages/foot.php';
        
    }

    // actualizar clave
    public function ActualizarPregunta(){
        //tomar todos los datos
        $idusuario = $_REQUEST["idusuario"];
        $idpreguntasecreta = $_REQUEST["idpreguntasecreta"];
        $respuestasecreta = $_REQUEST["respuestasecreta1"];

        //actualizar el usuario
        $this->model->ActualizarPregunta($idpreguntasecreta, $respuestasecreta, $idusuario);

        echo "<script>
                alert('CORRECTO: Registro modificado.\\n\\nNO OLVIDE SU PREGUNTA Y RESPUESTA.');
                window.location.href='?c=".base64_encode('Home')."';
            </script>";
        
    }
    
}

?>