<?php
class Entrada{
    private $dbh;
    public $codigo_entrada;
    public $nombre_producto;
    public $medida_producto;
    public $fecha_compra;
    public $cantidad;
    public $precio;
    public $nombre_proveedor;
    public $nit;
    public $telefono_proveedor;
    public $direccion_proveedor;
    public $correo_proveedor;
    public $observaciones_entrada;


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
            $stm = $this->dbh->prepare("SELECT * FROM entrada ORDER BY codigo_entrada DESC");
            $stm->execute();

            return $stm->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    public function Registrar(Entrada $data)
    {
        try {
            $sql = "INSERT INTO entrada (
            nombre_producto,
            medida_producto,
            fecha_compra,
            cantidad,
            precio,
            nombre_proveedor,
            nit,
            telefono_proveedor,
            direccion_proveedor,
            correo_proveedor,
            observaciones_entrada
            ) 
		        VALUES (?,?,?,?,?,?,?,?,?,?,?)";

            $this->dbh->prepare($sql)
                ->execute(
                    array(
                        $data->nombre_producto,
                        $data->medida_producto,
                        $data->fecha_compra,
                        $data->cantidad,
                        $data->precio,
                        $data->nombre_proveedor,
                        $data->nit,
                        $data->telefono_proveedor,
                        $data->direccion_proveedor,
                        $data->correo_proveedor,
                        $data->observaciones_entrada
                    )
                );
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    public function Get($id)
    {
        try {
            $stm = $this->dbh->prepare("SELECT * FROM entrada WHERE codigo_entrada = ?;");
            $stm->execute(array($id));

            return $stm->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    public function Actualizar(Entrada $data) {
        try {
    
            $sql = "UPDATE entrada SET 
            nombre_producto = ?,
            medida_producto = ?,
            fecha_compra = ?,
            cantidad = ?,
            precio = ?,
            nombre_proveedor = ?,
            nit = ?,
            telefono_proveedor = ?,
            direccion_proveedor = ?,
            correo_proveedor = ?,
            observaciones_entrada = ?
                    WHERE codigo_entrada = ?;";
    
            $this->dbh->prepare($sql)
                    ->execute(
                            array(
                                $data->nombre_producto,
                                $data->medida_producto,
                                $data->fecha_compra,
                                $data->cantidad,
                                $data->precio,
                                $data->nombre_proveedor,
                                $data->nit,
                                $data->telefono_proveedor,
                                $data->direccion_proveedor,
                                $data->correo_proveedor,
                                $data->observaciones_entrada,
                                $data->codigo_entrada
                            )
            );
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    public function Eliminar($id) {
        try {
            $sql ="DELETE from entrada WHERE codigo_entrada = ?;";
            $stm = $this->dbh->prepare($sql);
    
            $stm->execute([$id]);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    
    }
}
?>