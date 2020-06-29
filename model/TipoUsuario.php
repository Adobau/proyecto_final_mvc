<?php
class TipoUsuario
{
    private $pdo;

    public $idtipousuario;
    public $nombre;
    public $descripcion;

    public function __CONSTRUCT()
    {
        try
        {
            $this->pdo = Conexion::Conectar();
        } catch (Throwable $t) {
            die($t->getMessage());
        }
    }

    public function ListarTipoUsuarios()
    {
        try
        {
            $stm = $this->pdo->prepare("SELECT * FROM tipousuario");

            $stm->execute();

            return $stm->fetchAll(PDO::FETCH_OBJ);
        }catch (Throwable $t) {
            die($t->getMessage());
        }
    }

    public function ObtenerTipoUsuario($id)
    {
        try
        {
            $stm = $this->pdo->prepare("SELECT * FROM tipousuario WHERE idtipousuario = ?");

            $stm->execute(array($id));

            return $stm->fetch(PDO::FETCH_OBJ);
        }catch (Throwable $t) {
            die($t->getMessage());
        }
    }
} 

?>