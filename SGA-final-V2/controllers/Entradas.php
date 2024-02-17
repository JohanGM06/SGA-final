<?php 
    require_once "models/entrada.php";
    class Entradas{
        public function main(){
            echo "hola";
        }
        // Registrar entrada y proveedor
        public function createEntrada(){
            if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                require_once "views/Entrada/Ingreso_create.view.php";
        }
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $entrada = new Entrada(
                null,
                $_POST['productoEP'],
                $_POST['medidaEP'],
                $_POST['fechaEP'],
                $_POST['cantidadEP'],
                $_POST['precioEP'],
                $_POST['nombreproveedorEP'],
                $_POST['nitEP'],
                $_POST['celEP'],
                $_POST['direccionproveedorEP'],
                $_POST['correoproveedorEP'],
                $_POST['observacionesEP']
            );
            $entrada->entradaCreate();
            header("Location:?c=Entradas&a=readEntrada");
        }
    }
    public function readEntrada(){
        $entradas = new Entrada;
        $entradas = $entradas->entradaRead();
        
        require_once "views/Entrada/Ingreso_read.view.php";
        // var_dump($entradas);
    }


    public function updateEntrada(){
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            // 1ra Parte: Obtener el registro
            $entrada = new Entrada;
            $entrada = $entrada->getEntradaById($_GET['idEntrada']);
            require_once "views/Entrada/Ingreso_update.view.php";
        }
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // 2da Parte: Actualizar el registro

            $entrada = new Entrada(
                $_POST['codigoEP'],
                $_POST['productoEP'],
                $_POST['medidaEP'],
                $_POST['fechaEP'],
                $_POST['cantidadEP'],
                $_POST['precioEP'],
                $_POST['nombreproveedorEP'],
                $_POST['nitEP'],
                $_POST['celEP'],
                $_POST['direccionproveedorEP'],
                $_POST['correoproveedorEP'],
                $_POST['observacionesEP']            
            );
            // print_r($entrada);
            $entrada->entradaUpdate();
            header("Location:?c=Entradas&a=readEntrada");
        }
    }
    public function deleteEntrada(){
            $entrada = new Entrada;                        
            $entrada = $entrada->entradaDelete($_GET['idEntrada']); 
            
            header("Location:?c=Entradas&a=readEntrada");
        }

    }

?>