<?php
class PreguntaSecreta // inicio clase
{
    private $pdo; //para la bd
    //atributos 
    public $idpreguntasecreta;
    public $nombre;

    //<constructor
    public function __CONSTRUCT()
    {
        try
        {
            $this->pdo = Conexion::Conectar();

        }
        catch (Throwable $t)
        {
            die($t->getMessage());
        }
    }

    //generar Lista de datos
    public function ListarPreguntasSecretas()
    {
        try
        {

            $stm = $this->pdo->prepare("SELECT * FROM preguntasecreta");

            $stm->execute();

            return $stm->fetchAll(PDO::FETCH_OBJ);
        }
        catch(Throwable $t)
        {
            die($t->getMessage());
        }
    }

    //buscar un registro por id
    public function ObtenerPreguntaSecreta($id)
    {
        try
        {
            $stm = $this->pdo_drivers
        ->prepare("SELECT * FROM preguntasecreta WHERE idpreguntasecreta = ?");

         $stm->execute(array($id));

         return $stm->fetch(PDO::FETCH_OBJ);
        }
        catch (Throwable $t)
        {
            die($t->getMessage());
        }
    }

}//fin clase

?>