<?php
require_once "models/Salida.php";
class Salidas
{
    private $model;
    public function __CONSTRUCT()
    {
        $this->model = new Salida();
    }
    public function main()
    {
        require_once "views/Salida/Salida_read.view.php";
    }
    public function createSalida()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            require_once "views/Salida/Salida_create.view.php";
        }
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $alm = new Salida();

            $alm->nombre_producto = $_REQUEST['productoS'];
            $alm->medida_producto = $_REQUEST['medidaS'];
            $alm->fecha = $_REQUEST['fechaS'];
            $alm->cantidad = $_REQUEST['cantidadS'];
            $alm->tipo_id = $_REQUEST['tipoidS'];
            $alm->num_id = $_REQUEST['numidS'];
            $alm->nombre_cliente = $_REQUEST['nombresS'];
            $alm->telefono_cliente = $_REQUEST['celS'];
            $alm->direccion_cliente = $_REQUEST['direccionS'];
            $alm->correo_cliente = $_REQUEST['coreoS'];
            $alm->observaciones_salida = $_REQUEST['observacionesS'];

            $this->model->Registrar($alm);
?>
            <script language='JavaScript'>
                alert("Registro completado correctamente.");
                location.href = "?c=Salidas&a=main";
            </script>
<?php

        }
    }
    public function updateSalida()
    {
        if (isset($_REQUEST['idSalida'])) {
            $alm = $this->model->Get($_REQUEST['idSalida']);
        }

        require_once 'views/Salida/Ingreso_update.view.php';
    }
    public function Guardar()
    {
        $alm = new Salida();

        $alm->codigo_salida = $_REQUEST['codigoS'];
        $alm->nombre_producto = $_REQUEST['productoS'];
        $alm->medida_producto = $_REQUEST['medidaS'];
        $alm->fecha = $_REQUEST['fechaS'];
        $alm->cantidad = $_REQUEST['cantidadS'];
        $alm->tipo_id = $_REQUEST['tipoidS'];
        $alm->num_id = $_REQUEST['numidS'];
        $alm->nombre_cliente = $_REQUEST['nombresS'];
        $alm->telefono_cliente = $_REQUEST['celS'];
        $alm->direccion_cliente = $_REQUEST['direccionS'];
        $alm->correo_cliente = $_REQUEST['coreoS'];
        $alm->observaciones_salida = $_REQUEST['observacionesS'];

        // var_dump($alm);
        $this->model->Actualizar($alm);
        ?>
        <script language='JavaScript'>
            alert("Producto Actualizado exitosamente");
            location.href = "?c=Salidas&a=main";
        </script>
<?php
    }
    public function deleteSalida()
    {
        $entrada = new Salida;
        $entrada = $entrada->Eliminar($_GET['idSalida']);

        header("Location:?c=Salidas&a=main");
    }
}
?>