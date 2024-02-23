<?php
require_once "models/Producto.php";
class Productos
{
    public function main()
    {
        echo "hola";
    }
    public function readProducto()
    {
        $productos = new Producto;
        $productos = $productos->productoRead();
        // var_dump($productos);


        require_once "views/Landing/Modules/header.php";
        require_once "views/Landing/Modules/dep.php";
        require_once "views/Landing/Modules/iconos.php";
        require_once "views/Landing/Modules/tema.php";
        require_once "views/Landing/Modules/navSup.php";
        require_once "views/Producto/Producto_read.view.php";
        require_once "views/Landing/Modules/footer.php";
    }
}
?>