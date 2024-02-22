<?php
class Salida
{
    private $dbh;
    public $codigo_salida;
    public $nombre_producto;
    public $medida_producto;
    public $fecha;
    public $cantidad;
    public $tipo_id;
    public $num_id;
    public $nombre_cliente;
    public $telefono_cliente;
    public $direccion_cliente;
    public $correo_cliente;
    public $observaciones_salida;

    public function __CONSTRUCT()
    {
        try {
            $this->dbh = Database::connection();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    public function Obtener()
    {
        try {
            $stm = $this->dbh->prepare("SELECT * FROM salida ORDER BY codigo_salida DESC");
            $stm->execute();

            return $stm->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    public function Registrar(Salida $data)
    {
        try {
            $sql = "INSERT INTO salida (
            nombre_producto,
            medida_producto,
            fecha,
            cantidad,
            tipo_id,
            num_id,
            nombre_cliente,
            telefono_cliente,
            direccion_cliente,
            correo_cliente,
            observaciones_salida
            ) 
		        VALUES (?,?,?,?,?,?,?,?,?,?,?)";

            $this->dbh->prepare($sql)
                ->execute(
                    array(
                        $data->nombre_producto,
                        $data->medida_producto,
                        $data->fecha,
                        $data->cantidad,
                        $data->tipo_id,
                        $data->num_id,
                        $data->nombre_cliente,
                        $data->telefono_cliente,
                        $data->direccion_cliente,
                        $data->correo_cliente,
                        $data->observaciones_salida
                    )
                );
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    public function Get($id)
    {
        try {
            $stm = $this->dbh->prepare("SELECT * FROM salida WHERE codigo_salida = ?;");
            $stm->execute(array($id));

            return $stm->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    public function Actualizar(Salida $data) {
        try {
    
            $sql = "UPDATE salida SET 
            nombre_producto = ?,
            medida_producto = ?,
            fecha = ?,
            cantidad = ?,
            tipo_id = ?,
            num_id = ?,
            nombre_cliente = ?,
            telefono_cliente = ?,
            direccion_cliente = ?,
            correo_cliente = ?,
            observaciones_salida = ?
                    WHERE codigo_salida = ?;";
    
            $this->dbh->prepare($sql)
                    ->execute(
                            array(
                                $data->nombre_producto,
                                $data->medida_producto,
                                $data->fecha,
                                $data->cantidad,
                                $data->tipo_id,
                                $data->num_id,
                                $data->nombre_cliente,
                                $data->telefono_cliente,
                                $data->direccion_cliente,
                                $data->correo_cliente,
                                $data->observaciones_salida,
                                $data->codigo_salida
                            )
            );
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    public function Eliminar($id) {
        try {
            $sql ="DELETE from salida WHERE codigo_salida = ?;";
            $stm = $this->dbh->prepare($sql);
    
            $stm->execute([$id]);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    
    }
}
