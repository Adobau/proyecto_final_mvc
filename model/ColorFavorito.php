<?php
class ColorFavorito
{
    private $pdo;
    public $idcolorfavorito;
    public $idcolor;
    public $idcliente;

    public function _CONSTRUCT()
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

public function RegistrarColorFavorito($data)
{
    try
    {
    $sql = "INSERT INTO colorfavorito(idcolor, idcliente)
            VALUES(?,?)";

    $this->pdo->prepare($sql)
    ->execute(
    array(
        $data->idcolor,
        $data->idcliente
    )
    );

    }
    catch (Throwable $t)
    {
    die($t->getMessage());
    }
}

public function ObtenerColorFavorito($id)
{
    try
    {
    $stm = $this->pdo
    ->prepare("SELECT cf.idcolorfavorito AS idcolorfavorito, c.nombre AS color
    color FROM colorfavorito AS cf INNER JOIN color AS c ON cf.ifcolor = c.
    idcolor WHERE cf.idcliente = ?");

    $stm->execute(array($id));

    return $stm->fetchAll(PDO::FETCH_OBJ);
    }
    catch (Throwable $t)
    {
    die($t->getMessage());
    }

}

public function Eliminarcolorfavorito($id)
{
    try
    {
    $sql = "DELETE FROM colorfavorito WHERE idcolorfavorito = ?";

    $this->pdo->prepare($sql)->execute(array($id));

    }
    catch (Throwable $t)
    {
    die($t->getMessage());
}
}

}

?>