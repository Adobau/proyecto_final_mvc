<?php

require_once 'model/Cliente.php';
require_once 'model/Color.php';
require_once 'model/Talla.php';
require_once 'model/ColorFavorito.php';
require_once 'model/TallaCliente.php';

class ClienteController{
    
    private $model;
    private $modelColor;
    private $modelTalla;
    private $modelColorFavorito;
    private $modelTallaCliente;
    
    public function __CONSTRUCT(){
        //inicializa los modelos
        $this->model = new Cliente();
        $this->modelColor = new Color();
        $this->modelTalla = new Talla();
        $this->modelColorFavorito = new ColorFavorito();
        $this->modelTallaCliente = new TallaCliente();
    }

    // home Cliente  
    public function Index(){
        //muestra todas las partes de la vista read
        require_once 'view/pages/header.php';
        require_once 'view/pages/read/read_customer.php';
        require_once 'view/pages/foot_read.php';
    }
       
    // vista crear un cliente
    public function CrearCliente(){
        //muestra todas las partes de la vista 
        require_once 'view/pages/header.php';
        require_once 'view/pages/create/create_customer.php';
        require_once 'view/pages/foot.php';
    }

    // guardar un cliente
    public function RegistrarCliente(){
        //tomar todos los datos
        $this->model->nombre = $_REQUEST["nombre"];
        $this->model->apellido = $_REQUEST["apellido"];
        $this->model->telefono = $_REQUEST["telefono"];
        $this->model->direccion = $_REQUEST["direccion"];
        $this->model->email = $_REQUEST["email"];
        $this->model->sexo = $_REQUEST["sexo"];
        $fechanacimiento = date_create($_REQUEST["fechanacimiento"]);
        $this->model->fechanacimiento = date_format($fechanacimiento, 'Y-m-d');
        $this->model->idusuarioregistro = $_SESSION["id"];

        //guardar el cliente
        $this->model->RegistrarCliente($this->model);

        //muestra la vista read
        echo "<script>
                alert('CORRECTO: Los datos fueron guardados.');
                window.location.href='?c=".base64_encode('Cliente')."';
            </script>";
        
    }

    // vista editar cliente
    public function EditarCliente(){
        //tomar el id
        $idcliente = base64_decode($_REQUEST["idcliente"]);

        //obtener el registro con ese id
        $cliente = $this->model->ObtenerCliente($idcliente);

        //muestra todas las partes de la vista 
        require_once 'view/pages/header.php';
        require_once 'view/pages/update/update_customer.php';
        require_once 'view/pages/foot.php';
        
    }

    // actualizar cliente
    public function ActualizarCliente(){
        //tomar todos los datos
        $this->model->idcliente = $_REQUEST["idcliente"];
        $this->model->nombre = $_REQUEST["nombre"];
        $this->model->apellido = $_REQUEST["apellido"];
        $this->model->telefono = $_REQUEST["telefono"];
        $this->model->direccion = $_REQUEST["direccion"];
        $this->model->email = $_REQUEST["email"];
        $this->model->sexo = $_REQUEST["sexo"];
        $fechanacimiento = date_create($_REQUEST["fechanacimiento"]);
        $this->model->fechanacimiento = date_format($fechanacimiento, 'Y-m-d');

        //actualizar el cliente
        $this->model->ActualizarCliente($this->model);

        echo "<script>
                alert('CORRECTO: Registro modificado.');
                window.location.href='?c=".base64_encode('Cliente')."';
            </script>";
        
    }

    // cambiar estado
    public function CambiarEstado(){
        //tomar id y nuevo estado
        $idcliente = base64_decode($_REQUEST["idcliente"]);
        $nuevo_estado = base64_decode($_REQUEST["nuevo_estado"]);

        //cambiar estado
        $this->model->CambiarEstadoCliente($nuevo_estado, $idcliente);

        //muestra la vista read
        echo "<script>
                alert('CORRECTO: Registro modificado.');
                window.location.href='?c=".base64_encode('Cliente')."';
            </script>";
        
    }

    // vista registrar colorfavorito
    public function ColorFavorito(){
        //tomar el id
        $idcliente = base64_decode($_REQUEST["idcliente"]);

        //obtener el registro con ese id
        $cliente = $this->model->ObtenerCliente($idcliente);

        //muestra todas las partes de la vista 
        require_once 'view/pages/header.php';
        require_once 'view/pages/create/create_favorite_color.php';
        require_once 'view/pages/foot.php';
        
    }

    // guardar color favorito del cliente
    public function RegistrarColorFavorito(){
        //tomar todos los datos
        $this->modelColorFavorito->idcolor = $_REQUEST["idcolor"];
        $this->modelColorFavorito->idcliente = $_REQUEST["idcliente"];

        //guardar color favorito
        $this->modelColorFavorito->RegistrarColorFavorito($this->modelColorFavorito);

        //muestra la vista read
        echo "<script>
                alert('CORRECTO: Los datos fueron guardados.');
                window.location.href='?c=".base64_encode('Cliente')."';
            </script>";
        
    }

    // vista para los colores favoritos
    public function VerColorFavorito(){
        //tomar el id
        $idcliente = base64_decode($_REQUEST["idcliente"]);

        //obtener el registro con ese id
        $cliente = $this->model->ObtenerCliente($idcliente);

        //muestra todas las partes de la vista 
        require_once 'view/pages/header.php';
        require_once 'view/pages/read/read_favorite_color.php';
        require_once 'view/pages/foot_read.php';
        
    }

    // eliminar color favorito del cliente
    public function EliminarColorFavorito(){
        //tomar todos los datos
        $idcolorfavorito = base64_decode($_REQUEST["idcolorfavorito"]);

        //eliminar color favorito
        $this->modelColorFavorito->EliminarColorFavorito($idcolorfavorito);

        //muestra la vista read
        echo "<script>
                alert('CORRECTO: El color fue eliminado.');
                window.location.href='?c=".base64_encode('Cliente')."';
            </script>";
        
    }

    // vista registrar tallacliente
    public function TallaCliente(){
        //tomar el id
        $idcliente = base64_decode($_REQUEST["idcliente"]);

        //obtener el registro con ese id
        $cliente = $this->model->ObtenerCliente($idcliente);

        //muestra todas las partes de la vista 
        require_once 'view/pages/header.php';
        require_once 'view/pages/create/create_size_customer.php';
        require_once 'view/pages/foot.php';
        
    }

    // guardar tallacliente
    public function RegistrarTallaCliente(){
        //tomar todos los datos
        $this->modelTallaCliente->idcliente = $_REQUEST["idcliente"];
        $this->modelTallaCliente->idtalla = $_REQUEST["idtalla"];
        $this->modelTallaCliente->detalle = $_REQUEST["detalle"];

        //guardar talla cliente
        $this->modelTallaCliente->RegistrarTallaCliente($this->modelTallaCliente);

        //muestra la vista read
        echo "<script>
                alert('CORRECTO: Los datos fueron guardados.');
                window.location.href='?c=".base64_encode('Cliente')."';
            </script>";
        
    }

    // vista para las tallas del cliente
    public function VerTallaCliente(){
        //tomar el id
        $idcliente = base64_decode($_REQUEST["idcliente"]);

        //obtener el registro con ese id
        $cliente = $this->model->ObtenerCliente($idcliente);

        //muestra todas las partes de la vista create
        require_once 'view/pages/header.php';
        require_once 'view/pages/read/read_size_customer.php';
        require_once 'view/pages/foot_read.php';
        
    }

    // eliminar talla del cliente
    public function EliminarTallaCliente(){
        //tomar todos los datos
        $idtallacliente = base64_decode($_REQUEST["idtallacliente"]);

        //eliminar color favorito
        $this->modelTallaCliente->EliminarTallaCliente($idtallacliente);

        //muestra la vista read
        echo "<script>
                alert('CORRECTO: La talla fue eliminada.');
                window.location.href='?c=".base64_encode('Cliente')."';
            </script>";
        
    }

    
}

?>