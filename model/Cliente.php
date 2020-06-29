<?php
class Cliente
{
    private $pdo;
    public $idcliente;
    public $nombre;
    public $apellido;
    public $telefono;
    public $direccion;
    public $email;
    public $sexo;
    public $fechanacimiento;
    public $idusuarioregistro;
    public $estado;

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
public function RegistrarCliente($data)
{
    try
    {
        $sql = "INSERT INTO cliente (nombre, apellido, telefono, direccion, email, sexo,
        fechanacimiento, idusuarioregistro)
        VALUES(?, ?, ?, ?, ?, ?, ?, ?,)";

        $this->pdo->prepare($sql)
        ->execute(
            array(
                $data->nombre,
                $data->apellido,
                $data->telefono,
                $data->direccion,
                $data->email,
                $data->sexo,
                $data->fechanacimiento,
                $data->idusuarioregistro,
            )
            );

        }
        catch (Throwable $t)
        {
            die($t->getMessage());
        }
    }

    public function ListarClienteActivos()
    {
        try
        {
            $stm = $this->pdo->prepare("SELECT c.idcliente AS idcliente, c.nombre AS nombre, c.apellido AS apellido,
            c.telefono AS telefono, c.direccion as direccion, c.email AS email, c.sexo AS sexo, DATE_FORMAT (c.fechanacimiento, %d-%m-%y) AS fechanacimiento, TIMESTAMPDIFF(YEAR, c.fechanamiento, CURDATE()) AS edad,
            c.idusuarioregistro AS idusuarioregistro, u.apellido as registradopor FROM cliente AS c INNER JOIN usuario AS u ON c.idusuarioregistro = u.idusuario WHERE c.estado = 1");
            $stm->execute();

            return $stm->fechAll(PDO::FETCH_OBJ);
        }
        catch (Throwable$t)
        {
            die($t->getMessage());
        }
    }

    public function ListarClientesInactivos()
    {
        try
        {
            $stm = $this->pdo->prepare("SELECT c.idcliente AS idcliente, c.nombre AS nombre, c.apellido AS apellido,
            c.telefono AS telefono, c.direccion as direccion, c.email AS email, c.sexo AS sexo, DATE_FORMAT (c.fechanacimiento, %d-%m-%y) AS fechanacimiento, TIMESTAMPDIFF(YEAR, c.fechanamiento, CURDATE()) AS edad,
            c.idusuarioregistro AS idusuarioregistro, u.apellido as registradopor FROM cliente AS c INNER JOIN usuario AS u ON c.idusuarioregistro = u.idusuario WHERE c.estado = 0");

          $stm->execute();

          return $stm->fechAll(PDO::FETCH_OBJ);
        }
        catch (Throwable$t)
        {
            die($t->getMessage());
        }
    }

    public function ObtenerCliente($t)
    {
        try
    {
        $stm = $this->pdo->prepare("SELECT c.idcliente AS idcliente, c.nombre AS nombre, c.apellido AS apellido,
        c.telefono AS telefono, c.direccion as direccion, c.email AS email, c.sexo AS sexo, DATE_FORMAT (c.fechanacimiento, %d-%m-%y) AS fechanacimiento, TIMESTAMPDIFF(YEAR, c.fechanamiento, CURDATE()) AS edad,
        c.idusuarioregistro AS idusuarioregistro, u.apellido as registradopor FROM cliente AS c INNER JOIN usuario AS u ON c.idusuarioregistro = u.idusuario WHERE idcliente = ?");

         $stm->execute(array($id));

         return $stm->fechAll(PDO::FETCH_OBJ);
    }
     catch (Throwable $t)
     {
         die($t->getMessage());
     }
    }

    public function ActualizarCliente($tdata)
    {
        try
        {
            $sql = "UPDATE cliente SET
                         nombre          =?,
                         apellido        =?,
                         telefono        =?,
                         direccion       =?,
                         email           =?,
                         sexo            =?,
                         fechanacimienti =?,
                    WHERE idcliente = ?";

          $this->pdo->prepare($sql)
          ->execute(
              array(
                  $data->nombre,
                  $data->apellido,
                  $data->telefono,
                  $data->direccion,
                  $data->email,
                  $data->sexo,
                  $data->fechanacimiento,
                  $data->idcliente
              )
              );
            }
            catch (Throwable $t)
            {
                die($t->getMessage());
            }
        }

        public function CambiarEstadoCliente($nuevo_estado, $id)
        {
            try
        {
            $sql = "UPDATE cliente SET
                        estado      =?
                        WHERE idcliente = ?";

            $this->pdo->prepare($sql)
            ->execute(
                array(
                    $nuevo_estado,
                    $id

                )
                );
            }
            catch (Throwable $t)
            {
                die($t->getMessage());
            }
        }

    }

   ?>