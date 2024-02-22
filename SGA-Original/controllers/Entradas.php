<?php
require_once "models/entrada.php";
class Entradas
{
    private $model;
    public function __CONSTRUCT()
    {
        $this->model = new Entrada();
    }
    public function main()
    {
        require_once "views/Entrada/Ingreso_read.view.php";
    }
    // Registrar entrada y proveedor
    public function createEntrada()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            require_once "views/Entrada/Ingreso_create.view.php";
        }
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $alm = new Entrada();

            $alm->nombre_producto = $_REQUEST['productoEP'];
            $alm->medida_producto = $_REQUEST['medidaEP'];
            $alm->fecha_compra = $_REQUEST['fechaEP'];
            $alm->cantidad = $_REQUEST['cantidadEP'];
            $alm->precio = $_REQUEST['precioEP'];
            $alm->nombre_proveedor = $_REQUEST['nombreproveedorEP'];
            $alm->nit = $_REQUEST['nitEP'];
            $alm->telefono_proveedor = $_REQUEST['celEP'];
            $alm->direccion_proveedor = $_REQUEST['direccionproveedorEP'];
            $alm->correo_proveedor = $_REQUEST['correoproveedorEP'];
            $alm->observaciones_entrada = $_REQUEST['observacionesEP'];


            $this->model->Registrar($alm);
?>
            <script language='JavaScript'>
                alert("Registro completado correctamente.");
                location.href = "?c=Entradas&a=main";
            </script>
        <?php

        }
    }

    public function updateEntrada()
    {
        if (isset($_REQUEST['idEntrada'])) {
            $alm = $this->model->Get($_REQUEST['idEntrada']);
        }

        require_once 'views/Entrada/Ingreso_update.view.php';
    }
    public function Guardar()
    {
        $alm = new Entrada();

        $alm->codigo_entrada = $_REQUEST['codigoEP'];
        $alm->nombre_producto = $_REQUEST['productoEP'];
        $alm->medida_producto = $_REQUEST['medidaEP'];
        $alm->fecha_compra = $_REQUEST['fechaEP'];
        $alm->cantidad = $_REQUEST['cantidadEP'];
        $alm->precio = $_REQUEST['precioEP'];
        $alm->nombre_proveedor = $_REQUEST['nombreproveedorEP'];
        $alm->nit = $_REQUEST['nitEP'];
        $alm->telefono_proveedor = $_REQUEST['celEP'];
        $alm->direccion_proveedor = $_REQUEST['direccionproveedorEP'];
        $alm->correo_proveedor = $_REQUEST['correoproveedorEP'];
        $alm->observaciones_entrada = $_REQUEST['observacionesEP'];

        // var_dump($alm);
        $this->model->Actualizar($alm);
        ?>
        <script language='JavaScript'>
            alert("Producto Actualizado exitosamente");
            location.href = "?c=Entradas&a=main";
        </script>
<?php
    }


    public function deleteEntrada()
    {
        $entrada = new Entrada;
        $entrada = $entrada->Eliminar($_GET['idEntrada']);

        header("Location:?c=Entradas&a=main");
    }
}
?>