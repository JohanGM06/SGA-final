<?php
require_once "models/Salida.php";
class Salidas
{
    public function main()
    {
        echo "hi";
    }
    public function createSalida()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {

            require_once "views/Landing/Modules/header.php";
            require_once "views/Landing/Modules/dep.php";
            require_once "views/Landing/Modules/iconos.php";
            require_once "views/Landing/Modules/tema.php";
            require_once "views/Landing/Modules/navSup.php";
            require_once "views/Salida/Salida_create.view.php";
            require_once "views/Landing/Modules/footer.php";
        }
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $salidas = new Salida(
                null,
                $_POST['productoS'],
                $_POST['medidaS'],
                $_POST['fechaS'],
                $_POST['cantidadS'],
                $_POST['tipoidS'],
                $_POST['numidS'],
                $_POST['nombresS'],
                $_POST['celS'],
                $_POST['direccionS'],
                $_POST['coreoS'],
                $_POST['observacionesS']

            );
            // print_r($salida);
            $salidas->salidaCreate();
            header("Location:?c=Salidas&a=readSalida");
        }
    }
    public function readSalida()
    {
        $salidas = new Salida;
        $salidas = $salidas->salidaRead();

        require_once "views/Landing/Modules/header.php";
        require_once "views/Landing/Modules/dep.php";
        require_once "views/Landing/Modules/iconos.php";
        require_once "views/Landing/Modules/tema.php";
        require_once "views/Landing/Modules/navSup.php";
        require_once "views/Salida/Salida_read.view.php";
        require_once "views/Landing/Modules/footer.php";
    }
    public function updateSalida()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            // 1ra Parte: Obtener el registro
            $salida = new Salida;
            $salida = $salida->getSalidaById($_GET['idSalida']);

            require_once "views/Landing/Modules/header.php";
            require_once "views/Landing/Modules/dep.php";
            require_once "views/Landing/Modules/iconos.php";
            require_once "views/Landing/Modules/tema.php";
            require_once "views/Landing/Modules/navSup.php";
            require_once "views/Salida/Salida_update.view.php";
            require_once "views/Landing/Modules/footer.php";
        }
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // 2da Parte: Actualizar el registro

            $salida = new Salida(
                $_POST['codigoS'],
                $_POST['productoS'],
                $_POST['medidaS'],
                $_POST['fechaS'],
                $_POST['cantidadS'],
                $_POST['tipoidS'],
                $_POST['numidS'],
                $_POST['nombresS'],
                $_POST['celS'],
                $_POST['direccionS'],
                $_POST['coreoS'],
                $_POST['observacionesS']
            );
            // print_r($entrada);
            $salida->salidaUpdate();
            echo "listo, actualizado";
            header("Location:?c=Salidas&a=readSalida");
        }
    }

    public function deleteSalida()
    {
        $salida = new Salida;
        $salida = $salida->salidaDelete($_GET['idSalida']);
        echo "salida eliminada";
        header("Location:?c=Salidas&a=readSalida");
    }
}

?>